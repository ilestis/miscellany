<?php

return [
    'actions'       => [
        'move'  => 'Move',
        'back' => 'Back',
    ],
    'add'           => 'Add',
    'cancel'        => 'Cancel',
    'click_modal'   => [
        'close'     => 'Close',
        'confirm'   => 'Confirm',
        'title'     => 'Confirm your action',
    ],
    'create'        => 'Create',
    'delete_modal'  => [
        'close'         => 'Close',
        'delete'        => 'Delete',
        'description'   => 'Are you sure you want to remove :tag?',
        'title'         => 'Delete confirmation',
    ],
    'destroy_many'  => [
        'success'   => 'Deleted :count entity|Deleted :count entities.',
    ],
    'edit'          => 'Edit',
    'fields'        => [
        'character' => 'Character',
        'image'     => 'Image',
        'is_private'=> 'Private',
        'location'  => 'Location',
    ],
    'filter'        => 'Filter',
    'filters'       => 'Filters',
    'hints'         => [
        'is_private'    => 'Hide from "Viewers"',
    ],
    'is_private'    => 'This entity is private and not visible by the viewer users.',
    'linking_help'  => 'How can I link to other entries?',
    'move'          => [
        'description'   => '',
        'fields'        => [
            'target'    => 'New type',
        ],
        'hints'         => [
            'target'    => 'Please be aware that some data might be lost when moving an element from one type to another.',
        ],
        'success'       => 'Entity :name moved.',
        'title'         => 'Move :name to another place',
    ],
    'new_entity'    => [
        'error' => 'Please review your values.',
        'fields'=> [
            'name'  => 'Name',
        ],
        'title' => 'New entity',
    ],
    'or_cancel'     => 'or <a href=":url">cancel</a>',
    'panels'        => [
        'appearance'            => 'Appearance',
        'description'           => 'Description',
        'general_information'   => 'General Information',
        'history'               => 'History',
        'move'                  => 'Move',
    ],
    'placeholders'  => [
        'character' => 'Choose a character',
        'image_url' => 'You can upload an image from a URL instead',
        'location'  => 'Choose a location',
    ],
    'relations'     => [
        'actions'   => [
            'add'   => 'Add a relation',
        ],
        'fields'    => [
            'location'  => 'Location',
            'name'      => 'Name',
            'relation'  => 'Relation',
        ],
    ],
    'remove'        => 'Remove',
    'save'          => 'Save',
    'save_and_new'  => 'Save and New',
    'search'        => 'Search',
    'select'        => 'Select',
    'tabs'          => [
        'relations' => 'Relations',
        'attributes' => 'Attributes',
    ],
    'update'        => 'Update',
    'view'          => 'View',

    'attributes' => [
        'create' => [
            'title' => 'New Attribute for :name',
            'description' => '',
            'success' => 'Attribute :name added to :entity.',
        ],
        'actions' => [
            'add' => 'Add an attribute',
            'apply_template' => 'Apply an Attribute Template',
        ],
        'edit' => [
            'title' => 'Update attribute for :name',
            'description' => '',
            'success' => 'Attribute :name for :entity updated.',
        ],
        'fields' => [
            'attribute' => 'Attribute',
            'value' =>  'Value',
            'template' => 'Template',
        ],
        'placeholders' => [
            'attribute' => 'Number of conquests, Challenge Rating, Initiative, Population',
            'value' => 'Value of the attribute',
            'template' => 'Select a template',
        ],
        'destroy' => [
            'success' => 'Aattribute :name for :entity removed.',
        ],
        'template' => [
            'title' => 'Apply an Attribute Template for :name',
            'success' => 'Attribute Template :name applies on :entity',
        ]
    ],
];
