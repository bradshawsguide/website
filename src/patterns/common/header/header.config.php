<?php

$page = page('about');

return [
    'defaults' => [
        'level' => 1,
        'parent' => null,
        'title' => $page->title(),
        'subtitle' => null,
        'modifiers' => null,
    ]
];
