<?php

$page = page('stations/brighton');

return [
    'defaults' => [
        'level' => 3,
        'title' => $page->title(),
        'route' => page('places/england/sussex/brighton')->routes()[0]
    ]
];
