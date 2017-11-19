<?php

$page = page('routes/london-bridge-to-brighton');

return [
    'defaults' => [
        'title' => $page->title(),
        'route' => $page
    ]
];
