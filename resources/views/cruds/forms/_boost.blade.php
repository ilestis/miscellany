@include('cruds.partials.boosted')

<div class="form-group">
    <label>{{ trans('crud.fields.tooltip') }}</label>
    {!! Form::textarea('entity_tooltip', FormCopy::entity()->field('tooltip')->string(), ['class' => 'form-control', 'id' => 'tooltip', 'rows' => 3]) !!}

    <p class="help-block">
        <a href="{{ route('helpers.link') }}" data-toggle="tooltip" class="pull-right" title="{{ trans('helpers.link.description') }}" target="_blank">{{ __('crud.linking_help') }}</a>
        {{ __('crud.hints.tooltip') }}
    </p>
</div>

<div class="form-group">
    <label>{{ trans('crud.fields.header_image') }}</label>
    <p class="help-block">{{ __('crud.hints.header_image') }}</p>

    {!! Form::hidden('remove-header_image') !!}

    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                {!! Form::file('header_image', array('class' => 'image form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::text('header_image_url', null, ['placeholder' => trans('crud.placeholders.image_url'), 'class' => 'form-control']) !!}

                <p class="help-block">
                    {{ trans('crud.hints.image_limitations', ['formats' => 'PNG, JPG, GIF, WebP', 'size' => auth()->user()->maxUploadSize(true)]) }}
                    @if (!auth()->user()->hasRole('patreon'))
                        <a href="{{ route('settings.patreon') }}">{{ __('crud.hints.image_patreon') }}</a>
                    @endif
                </p>
            </div>

        </div>
        <div class="col-md-2">
            @if (!empty($model->entity) && !empty($model->entity->header_image))
                <div class="preview-v2">
                    <div class="image" style="background-image: url('{{ $model->entity->getImageUrl(80, null) }}')" title="{{ $model->name }}">
                        <a href="#" class="img-delete" data-target="remove-header_image" title="{{ trans('crud.remove') }}">
                            <i class="fa fa-trash"></i> {{ trans('crud.remove') }}
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@include('cruds.fields.entity_header')
@include('cruds.fields.entity_image')
