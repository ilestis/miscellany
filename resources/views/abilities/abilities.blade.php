@extends('layouts.app', [
    'title' => trans('abilities.abilities.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => Breadcrumb::index('abilities'), 'label' => __('abilities.index.title')],
        ['url' => route('abilities.show', $model), 'label' => $model->name],
        trans('abilities.show.tabs.abilities')
    ],
    'mainTitle' => false,
])

@inject('campaign', 'App\Services\CampaignService')

@section('content')
    @include('partials.errors')
    <div class="row entity-grid">
        <div class="col-md-2 entity-sidebar-submenu">
            @include('abilities._menu', ['active' => 'abilities'])
        </div>
        <div class="col-md-10 entity-main-block">
            @include('abilities.panels.abilities')
        </div>
    </div>
@endsection
