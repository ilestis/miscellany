<?php

return [
    'actions'       => [
        'add'   => 'Ajouter un nouveau groupe',
    ],
    'create'        => [
        'success'   => 'Groupe :name créé.',
        'title'     => 'Nouveau Groupe',
    ],
    'delete'        => [
        'success'   => 'Groupe :name supprimé.',
    ],
    'edit'          => [
        'success'   => 'Groupe :name modifié.',
        'title'     => 'Modifier le groupe :name',
    ],
    'fields'        => [
        'position'  => 'Position',
    ],
    'helper'        => [
        'amount'            => 'Un marqueur peut être attaché à un groupe, permettant d\'afficher ou de cacher tous les marqueurs d\'un groupe à la fois (par example tous les marqueurs attachés au groupe Magasins). Une carte peut avoir jusqu\'à :amount groupes.',
        'boosted_campaign'  => 'Les cartes :boosted peuvent avoir jusqu\'à :amount groupes.',
    ],
    'placeholders'  => [
        'name'      => 'Magasins, trésors, PNJs',
        'position'  => 'Champ optionnel pour définir l\'ordre dans lequel s\'affichent les groupes.',
    ],
];