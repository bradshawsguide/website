<?php

snippet('head');

snippet('traverse');

snippet('header', [
    'pretitle' => 'A descriptive guide to',
    'title' => $page->title(),
    'modifiers' => ['index']
]);

if ($page->text()->isNotEmpty()) {
    snippet('page/content', [
        'proseModifiers' => ['centered']
    ]);
}

if ($page->uid() != 'channel-islands') {
    $items = $page->children();
    if (size($items)) {
        snippet('section/list', [
            'title' => $page->listTitle(),
            'items' => $items,
            'display' => 'columns'
        ]);
    }
}

if (size($page->featured())) {
    snippet('section/list', [
        'title' => 'Featured places',
        'modifiers' => ['offset'],
        'items' => $page->featured(),
        'component' => 'feature',
        'display' => 'grid'
    ]);
};

snippet('foot');
