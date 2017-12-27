<?php

$page = page('about');

return [
    'defaults' => [
        'parent' => null,
        'title' => $page->title(),
        'subtitle' => null,
        'modifiers' => null,
    ]
];
