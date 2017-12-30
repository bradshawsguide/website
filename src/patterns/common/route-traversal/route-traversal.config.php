<?php

$page = page('stations/brighton');

return [
    'defaults' => [
        'level' => 3,
        'title' => $page->title(),
        'route' => page('stations/brighton')->routes()
    ]
];
