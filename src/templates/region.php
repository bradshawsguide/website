<?php
snippet('head');

pattern('common/traversal-nav');

pattern('common/page/header', [
    'pretitle' => 'A descriptive guide to',
    'title' => $page->title(),
    'modifiers' => ['index']
]);

if (!$page->text()->empty()) {
    pattern('common/page/content', [
        'proseModifiers' => ['centered']
    ]);
}

if (count($page->featured())) {
    pattern('common/section/list', [
        'title' => 'Featured places',
        'items' => $page->featured(),
        'component' => 'common/feature',
        'display' => 'grid'
    ]);
};

pattern('common/section/list', [
    'title' => 'Places in '.$page->title(),
    'items' => $page->children(),
    'display' => 'columns'
]);

snippet('foot');
