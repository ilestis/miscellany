<?php

return [
    'characters'    => [],
    'create'        => [
        'description'   => 'Crear unha nova misión',
        'success'       => 'Misión ":name" creada.',
        'title'         => 'Nova misión',
    ],
    'destroy'       => [
        'success'   => 'Misión ":name" eliminada.',
    ],
    'edit'          => [
        'description'   => 'Editar unha misión',
        'success'       => 'Misión ":name" actualizada.',
        'title'         => 'Editar misión ":name"',
    ],
    'elements'      => [
        'create'    => [
            'success'   => 'Entidade ":entity" engadida á misión.',
            'title'     => 'Novo elemento para ":name"',
        ],
        'destroy'   => [
            'success'   => 'Elemento ":entity" eliminado da misión.',
        ],
        'edit'      => [
            'success'   => 'Elemento ":entity" actualizado na misión.',
            'title'     => 'Actualizar elemento da misión ":name"',
        ],
        'fields'    => [
            'description'   => 'Descrición',
            'quest'         => 'Misión',
        ],
        'title'     => 'Elementos da misión ":name"',
    ],
    'fields'        => [
        'character'     => 'Quen deu a misión',
        'copy_elements' => 'Copiar elementos ligados á misión',
        'date'          => 'Data',
        'description'   => 'Descrición',
        'image'         => 'Imaxe',
        'is_completed'  => 'Completada',
        'name'          => 'Nome',
        'quest'         => 'Misión superior',
        'quests'        => 'Submisións',
        'role'          => 'Rol',
        'type'          => 'Tipo',
    ],
    'helpers'       => [
        'nested_parent' => 'Mostrando as misións de ":parent".',
        'nested_without'=> 'Mostrando todas as misións que non teñen unha misión superior. Fai clic nunha fila para ver as súas submisións.',
    ],
    'hints'         => [
        'quests'    => 'Podes crear unha rede de misións entrelazadas usando o campo "Misión superior".',
    ],
    'index'         => [
        'add'           => 'Nova misión',
        'description'   => 'Administra as misións de ":name".',
        'header'        => 'Misións de ":name"',
        'title'         => 'Misións',
    ],
    'items'         => [],
    'locations'     => [],
    'organisations' => [],
    'placeholders'  => [
        'date'  => 'Data do mundo real para a misión',
        'name'  => 'Nome da misión',
        'quest' => 'Misión superior',
        'role'  => 'O rol desta entidade na misión',
        'type'  => 'Arco de personaxe, Misión secundaria, Historia principal...',
    ],
    'show'          => [
        'actions'       => [
            'add_element'   => 'Engadir un elemento',
        ],
        'description'   => 'Vista detallada dunha misión',
        'tabs'          => [
            'elements'      => 'Elementos',
            'information'   => 'Información',
            'quests'        => 'Misións',
        ],
        'title'         => 'Misión ":name"',
    ],
];
