<?php

return [
    'actions'           => [
        'follow'    => 'Seguir',
        'join'      => 'Unirse',
        'unfollow'  => 'Dejar de seguir',
    ],
    'campaigns'         => [
        'tabs'  => [
            'modules'   => ':count módulos',
            'roles'     => ':count roles',
            'users'     => ':count usuarios',
        ],
    ],
    'dashboards'        => [
        'actions'       => [
            'edit'      => 'Editar',
            'new'       => 'Nuevo tablero',
            'switch'    => 'Cambiar a otro tablero',
        ],
        'boosted'       => 'Las :boosted_campaigns pueden crear tableros personalizados para cada uno de los roles de la campaña.',
        'create'        => [
            'success'   => 'Tablero :name creado.',
            'title'     => 'Nuevo tablero de campaña',
        ],
        'custom'        => [
            'text'  => 'Estás editando el tablero :name de la campaña.',
        ],
        'default'       => [
            'text'  => 'Estás editando el tablero por defecto de la campaña.',
            'title' => 'Tablero por defecto',
        ],
        'delete'        => [
            'success'   => 'Tablero :name eliminado.',
        ],
        'fields'        => [
            'copy_widgets'  => 'Copiar widgets',
            'name'          => 'Nombre del tablero',
            'visibility'    => 'Visibilidad',
        ],
        'helpers'       => [
            'copy_widgets'  => 'Duplica los widgets del tablero :name a este.',
        ],
        'placeholders'  => [
            'name'  => 'Nombre del tablero',
        ],
        'update'        => [
            'success'   => 'Tablero :name actualizado.',
            'title'     => 'Actualizar el tablero de campaña :name',
        ],
        'visibility'    => [
            'default'   => 'Por defecto',
            'none'      => 'Ninguna',
            'visible'   => 'Visible',
        ],
    ],
    'description'       => 'Tu plaza creativa',
    'helpers'           => [
        'follow'    => 'Si sigues una campaña, esta aparecerá en el menú de cambio de campaña (arriba a la derecha) bajo tus campañas.',
        'join'      => 'Esta campaña está abierta a nuevos miembros. Haz clic en unirse para enviar una solicitud.',
        'setup'     => 'Configura el tablero de la campaña',
    ],
    'latest_release'    => 'Publicación reciente',
    'notifications'     => [
        'modal' => [
            'confirm'   => 'Entendido',
            'title'     => 'Notificación importante',
        ],
    ],
    'recent'            => [
        'title' => ':name recientemente modificados',
    ],
    'settings'          => [
        'title' => 'Ajustes del tablero',
    ],
    'setup'             => [
        'actions'   => [
            'add'               => 'Añadir widget',
            'back_to_dashboard' => 'Volver al tablero',
            'edit'              => 'Editar widget',
        ],
        'title'     => 'Configurar el tablero de campaña',
        'widgets'   => [
            'calendar'      => 'Calendario',
            'campaign'      => 'Encabezado de la campaña',
            'header'        => 'Encabezado',
            'preview'       => 'Previsualización de la entidad',
            'random'        => 'Entidad aleatoria',
            'recent'        => 'Reciente',
            'unmentioned'   => 'Entidades sin mención',
        ],
    ],
    'title'             => 'Tablero de',
    'welcome'           => [],
    'widgets'           => [
        'calendar'      => [
            'actions'           => [
                'next'      => 'Cambiar fecha al día siguiente',
                'previous'  => 'Cambiar fecha al día anterior',
            ],
            'events_today'      => 'Hoy',
            'previous_events'   => 'Anterior',
            'upcoming_events'   => 'Próximo',
        ],
        'campaign'      => [
            'helper'    => 'Este widget muestra el encabezado de la campaña. Siempre se muestra en el tablero por defecto.',
        ],
        'create'        => [
            'success'   => 'Widget añadido al tablero.',
        ],
        'delete'        => [
            'success'   => 'Widget eliminado del tablero.',
        ],
        'fields'        => [
            'name'  => 'Nombre personalizado del widget',
            'text'  => 'Texto',
            'width' => 'Anchura',
        ],
        'recent'        => [
            'entity-header' => 'Usar la cabecera de la entidad como imagen',
            'full'          => 'Completa',
            'help'          => 'Solo muestra la previsualización de la última entidad actualizada.',
            'helpers'       => [
                'entity-header' => 'Si la entidad tiene una imagen de cabecera (funcionalidad de campañas mejoradas), puedes habilitar que este widget use dicha imagen en lugar de la imagen de la entidad.',
                'full'          => 'Muestra toda la entidad por defecto en lugar de una previsualización.',
            ],
            'singular'      => 'Singular',
            'tags'          => 'Filtra la lista de las entidades recientemente modificadas con etiquetas específicas.',
            'title'         => 'Modificado recientemente',
        ],
        'unmentioned'   => [
            'title' => 'Entidades no mencionadas',
        ],
        'update'        => [
            'success'   => 'Widget modificado.',
        ],
        'widths'        => [
            '0' => 'Auto',
            '12'=> 'Completa (100%)',
            '3' => 'Cuarto (25%)',
            '4' => 'Tercio (33%)',
            '6' => 'Mitad (50%)',
            '8' => 'Dos tercios (66%)',
        ],
    ],
];
