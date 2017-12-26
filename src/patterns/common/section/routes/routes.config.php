<?php

return [
    'defaults' => [
        'level' => 2,
        'title' => 'Routes operated',
        'items' => page('routes')->children()->filterBy('company', 'south-eastern')
    ]
];
