<?php


namespace App\Datagrids;


use App\Models\MiscModel;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Symfony\Component\VarDumper\Cloner\Data;

abstract class Datagrid
{
    const FIELD_NAME = 'name';
    const FIELD_TEXT = 'text';
    const FIELD_IMAGE = 'image';
    const FIELD_TYPE = 'type';
    const FIELD_DATE = 'date';
    const FIELD_ENTITY = 'entity';
    const FIELD_PRIVATE = 'private';
    const FIELD_CALENDAR_DATE = 'calendar_date';
    const FIELD_TAG = 'tag';

    protected $rows = [];
    protected $search = [];
    protected $orders = [];

    /**
     * @return string
     */
    public function jsonFields(): string
    {
        $fields = [];
        if (method_exists($this, 'fields')) {
            $fields = $this->fields();
        }
        return json_encode($fields);
    }

    /**
     * @return string
     */
    public function jsonFilters(): string
    {
        $filters = [];
        if (method_exists($this, 'filters')) {
            $filters = $this->filters();

            // Add values to the filters
            foreach ($filters as $key => $filter) {
                $value = Arr::get($this->search, $key, null);

                if(in_array($key, ['is_private']) && $value === null) {
                    $value = '';
                }
                $filters[$key]['value'] = $value;
            }
        }
        return json_encode($filters);
    }

    /**
     * @param $rows
     * @return $this
     */
    public function rows($rows): self
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @param $search
     * @return $this
     */
    public function searchFilters($search): self
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @param $order
     * @return $this
     */
    public function orders($order): self
    {
        $this->order = $order;
        return $this;
    }

    public function list(): array
    {
        $rows = [];

        /** @var MiscModel $row */
        foreach ($this->rows as $row) {
            $rowData = [
                'id' => $row->id,
                'viewUrl' => $row->getLink(),
                'editUrl' => auth()->user()->can('update', $row) ? $row->getLink('edit') : null,
            ];
            foreach ($this->fields() as $key => $field) {
                $data = $this->prepareField($row, $key, $field);

                $rowData[$key] = $data;
            }
            $rows[] = $rowData;
        }

        return [
            'data' => $rows
        ];
    }

    protected function prepareField($row, $key, $field)
    {
        $type = $field['field'];
        if ($type == Datagrid::FIELD_IMAGE) {
            return $row->getImageUrl(true, $key);
        } elseif ($type == Datagrid::FIELD_CALENDAR_DATE) {
            return $row->hasCalendar() ? $row->getDate() : '';
        } elseif ($type == Datagrid::FIELD_ENTITY) {
            /** @var MiscModel $foreign */
            $foreign = $row->$key;
            if (empty($foreign)) {
                return null;
            }
            return [
                'id' => $foreign->id,
                'name' => $foreign->name,
                'image' => $foreign->getImageUrl(true),
                'viewUrl' => $foreign->getLink(),
            ];
        } elseif ($type == Datagrid::FIELD_PRIVATE) {
            return $row->is_private;
        }
        return $row->$key;
    }
}