<?php /** @var App\Models\character $model */ ?>

@includeWhen(!isset($exporting), 'entities.components.menu')
@includeWhen(auth()->check() && !isset($exporting), 'entities.components.actions')
