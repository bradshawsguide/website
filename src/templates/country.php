<?php
snippet('head');

pattern('common/traversal-nav');

pattern('common/page/header', [
    'pretitle' => 'A descriptive guide to places in',
    'title' => $page->title(),
    'modifiers' => ['index']
]);

if (count($page->featured())) {
    pattern('common/section/featured', [
        'title' => 'Featured places',
        'items' => $page->featured()
    ]);
};

pattern('common/section/list', [
    'title' => $page->subdivision(),
    'items' => $page->children()
]);

snippet('foot');
