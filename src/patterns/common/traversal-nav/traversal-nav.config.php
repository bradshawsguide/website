<?php

$page = page('places/england');

return [
    'defaults' => [
        'title' => $page->title(),
        'route' => $page
    ]
];
