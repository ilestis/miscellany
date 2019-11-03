<?php


namespace App\Datagrids;


class JournalDatagrid extends Datagrid
{
    public function fields(): array
    {
        return [
            'image' => [
                'field' => Datagrid::FIELD_IMAGE,
            ],
            'name' => [
                'field' => Datagrid::FIELD_NAME
            ],
            'type' => [
                'field' => Datagrid::FIELD_TEXT
            ],
            'date' => [
                'field' => Datagrid::FIELD_TEXT,
                'text' => 'journals.fields.date'
            ],
            'calendar_date' => [
                'field' => Datagrid::FIELD_CALENDAR_DATE
            ],
            'character' => [
                'field' => Datagrid::FIELD_ENTITY,
                'text' => 'journals.fields.author'
            ],
            'is_private' => [
                'field' => Datagrid::FIELD_PRIVATE,
            ]
        ];
    }

    public function filters(): array
    {
        return [
            'name' => [
                'field' => Datagrid::FIELD_TEXT,
            ],
            'type' => [
                'field' => Datagrid::FIELD_TYPE
            ],
            'date' => [
                'field' => Datagrid::FIELD_DATE,
                'text' => 'journals.fields.date'
            ],
            'character_id' => [
                'field' => Datagrid::FIELD_ENTITY,
                'route' => route('characters.find'),
                'text' => 'journals.fields.author',
            ],
            'location_id' => [
                'field' => Datagrid::FIELD_ENTITY,
                'route' => route('locations.find')
            ],
            'tag_id' => [
                'field' => Datagrid::FIELD_TAG,
                'route' => route('tags.find'),
            ],
            'is_private' => [
                'field' => Datagrid::FIELD_PRIVATE
            ],
        ];
    }
}
