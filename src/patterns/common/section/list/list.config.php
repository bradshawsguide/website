<?php

return [
    'defaults' => [
        'level' => 2,
        'title' => 'Stations served',
        'items' => page('routes')->children()->filterBy('company', 'south-eastern')
    ]
];
