<?php

return [
    'defaults' => [
        'title' => '3 pages found',
        'results' => page('routes')->children()->filterBy('company', 'south-eastern')
    ]
];
