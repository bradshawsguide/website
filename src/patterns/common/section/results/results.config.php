<?php

return [
    'defaults' => [
        'level' => 2,
        'title' => '3 pages found',
        'results' => page('routes')->children()->filterBy('company', 'south-eastern')
    ]
];
