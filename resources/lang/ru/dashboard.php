<?php

return [
    'actions'           => [
        'follow'    => 'Отслеживать',
        'join'      => 'Вступить',
        'unfollow'  => 'Перестать отслеживать',
    ],
    'campaigns'         => [
        'tabs'  => [
            'modules'   => 'Модули: :count',
            'roles'     => 'Роли: :count',
            'users'     => 'Пользователи: :count',
        ],
    ],
    'dashboards'        => [
        'actions'       => [
            'edit'      => 'Изменить параметры',
            'new'       => 'Новый обзор',
            'switch'    => 'Другой обзор',
        ],
        'boosted'       => ':boosted_campaigns могут использовать отдельные обзоры для определенных ролей.',
        'create'        => [
            'success'   => 'Обзор ":name" создан.',
            'title'     => 'Новый обзор кампании',
        ],
        'custom'        => [
            'text'  => 'Вы редактируете обзор :name этой кампании.',
        ],
        'default'       => [
            'text'  => 'Вы редактируете основной обзор этой кампании.',
            'title' => 'Основной обзор',
        ],
        'delete'        => [
            'success'   => 'Обзор ":name" удален.',
        ],
        'fields'        => [
            'copy_widgets'  => 'Копировать виджеты',
            'name'          => 'Название обзора',
            'visibility'    => 'Доступ',
        ],
        'helpers'       => [
            'copy_widgets'  => 'Копировать виджеты из обзора :name в новый обзор.',
        ],
        'placeholders'  => [
            'name'  => 'Название обзора',
        ],
        'update'        => [
            'success'   => 'Обзор ":name" обновлен.',
            'title'     => 'Обновление обзора :name',
        ],
        'visibility'    => [
            'default'   => 'Основной',
            'none'      => 'Недоступный',
            'visible'   => 'Доступный',
        ],
    ],
    'description'       => 'Дом для вашего творчества',
    'helpers'           => [
        'follow'    => 'Кампании, которые вы отслеживаете, находятся в переключателе кампаний (слева вверху) ниже ваших кампаний.',
        'join'      => 'Эта кампания открыта для новых участников. Нажмите, чтобы отправить заявку а вступление.',
        'setup'     => 'Составьте обзор вашей кампании.',
    ],
    'latest_release'    => 'Последнее обновление',
    'notifications'     => [
        'modal' => [
            'confirm'   => 'Понятно',
            'title'     => 'Важное уведомление',
        ],
    ],
    'recent'            => [
        'title' => 'Недавнее изменение :name',
    ],
    'settings'          => [
        'title' => 'Настройка обзора',
    ],
    'setup'             => [
        'actions'   => [
            'add'               => 'Добавить виджет',
            'back_to_dashboard' => 'Назад к обзору',
            'edit'              => 'Редактировать виджет',
        ],
        'title'     => 'Настройка обзора кампании',
        'widgets'   => [
            'calendar'      => 'Календарь',
            'campaign'      => 'Заголовок кампании',
            'header'        => 'Заголовок',
            'preview'       => 'Объект',
            'random'        => 'Случайный объект',
            'recent'        => 'Недавние изменения',
            'unmentioned'   => 'Неупомянутые объекты',
        ],
    ],
    'title'             => 'Обзор кампании',
    'widgets'           => [
        'actions'                   => [
            'advanced-options'  => 'Дополнительные параметры',
        ],
        'advanced_options_boosted'  => ':boosted_campaigns обладают дополнительными функциями объектов, такими как отображение членов семьи или атрибутов объекта в обзоре кампании.',
        'calendar'                  => [
            'actions'           => [
                'next'      => 'Изменить дату на следующий день',
                'previous'  => 'Изменить дату на предыдущий день',
            ],
            'events_today'      => 'Сегодня',
            'previous_events'   => 'Прошедшие',
            'upcoming_events'   => 'Грядущие',
        ],
        'campaign'                  => [
            'helper'    => 'Этот виджет показывает заголовок кампании. Он всегда отображается в основном обзоре кампании.',
        ],
        'create'                    => [
            'success'   => 'Виджет добавлен в обзор.',
        ],
        'delete'                    => [
            'success'   => 'Виджет удален из обзора.',
        ],
        'fields'                    => [
            'dashboard' => 'Обзор',
            'name'      => 'Заголовок виджета',
            'order'     => 'Сортировка',
            'text'      => 'Текст',
            'width'     => 'Ширина',
        ],
        'orders'                    => [
            'name_asc'  => 'По алфавиту (А - Я)',
            'name_desc' => 'По алфавиту (Я - А)',
            'recent'    => 'По дате изменения',
        ],
        'random'                    => [
            'helpers'   => [
                'name'  => 'Упомянуть случайный объект можно так: {name}',
            ],
        ],
        'recent'                    => [
            'entity-header'     => 'Использовать изображение заголовка объекта',
            'filters'           => 'Фильтры',
            'full'              => 'Полная статья',
            'help'              => 'Показывать только последний измененный объект.',
            'helpers'           => [
                'entity-header'     => 'Если у объекта есть изображение заголовка (функция усиленных кампаний), этот виджет будет использовать его, а не основное изображение объекта.',
                'filters'           => 'Вы можете указать, какие объекты должны быть показаны. Узнать как пользоваться этим полем можно на странице справки о :link.',
                'full'              => 'По умолчанию показывать полный текст статьи объекта.',
                'show_attributes'   => 'Показывать закрепленные атрибуты объекта под текстом статьи.',
                'show_members'      => 'Если объект - семья или организация, показывать его членов.',
            ],
            'show_attributes'   => 'Показывать закрепленные атрибуты',
            'show_members'      => 'Показывать членов',
            'singular'          => 'Один объект',
            'tags'              => 'Фильтровать список недавно измененных объектов по указанным тэгам.',
            'title'             => 'Недавние изменения',
        ],
        'unmentioned'               => [
            'title' => 'Неупомянутые объекты',
        ],
        'update'                    => [
            'success'   => 'Виджет обновлен.',
        ],
        'widths'                    => [
            '0' => 'Автоматически',
            '12'=> 'Полная страница (100%)',
            '3' => 'Маленькая (25%)',
            '4' => 'Средняя (33%)',
            '6' => 'Половина страницы (50%)',
            '8' => 'Большая (66%)',
        ],
    ],
];
