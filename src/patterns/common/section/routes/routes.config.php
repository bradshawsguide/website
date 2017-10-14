<?php

return [
    'defaults' => [
        'title' => 'Routes operated',
        'items' => page('routes')->children()->filterBy('company', 'south-eastern')
    ]
];
