<?php

return [
    [
        'name' => 'extractors',
        'label' => 'seat-pi::common.menu.extractors',
        'route' => 'seat-pi::account-pi-extractors',
        'permission' => 'character.planetary',
        'highlight_view' => 'extractors'
    ],
    [
        'name' => 'factories',
        'label' => 'seat-pi::common.menu.factories',
        'route' => 'seat-pi::account-pi-factories',
        'permission' => 'character.planetary',
        'highlight_view' => 'factories'
    ],
    [
        'name' => 'projects',
        'label' => 'seat-pi::common.menu.projects',
        'route' => 'seat-pi::account-pi-projects',
        'permission' => 'character.planetary',
        'highlight_view' => 'projects'
    ]
];