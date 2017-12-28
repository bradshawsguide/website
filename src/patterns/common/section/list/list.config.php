<?php

return [
    'defaults' => [
        'level' => 2,
        'modifiers' => null,
        'title' => 'Stations served',
        'items' => page('routes')->children()->filterBy('company', 'south-eastern'),
        'component' => null,
        'display' => null
    ]
];
