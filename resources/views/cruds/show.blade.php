<?php /** @var \App\Models\MiscModel $model */?>

@inject('campaign', 'App\Services\CampaignService')
@php
$headerImage = !empty($model->entity->header_image) && $campaign->campaign()->boosted();
@endphp

@extends('layouts.' . ($ajax ? 'ajax' : 'app'), [
    'title' => trans($name . '.show.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => Breadcrumb::index($name), 'label' => trans($name . '.index.title')],
        $model->name,
    ],
    'canonical' => true,
    'mainTitle' => false,
])

@section('og')
    <meta property="og:description" content="{{ $model->tooltip() ?: trans($name . '.show.title', ['name' => $model->name]) }}" />
    @if ($model->image)<meta property="og:image" content="{{ Storage::url($model->image)  }}" />@endif

    <meta property="og:url" content="{{ $model->getLink()  }}" />
@endsection

@include('entities.components.header', ['model' => $model])

@section('content')

    @include($name . '.show')
@endsection
