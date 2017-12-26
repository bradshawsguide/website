<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

pattern('common/page/header', [
    'parent' => html::a($page->parent()->url(), $page->parent()->title()),
    'title' => $page->title(),
    'subtitle' => $page->subtitle()
]);

if ($image = $page->image('cover.jpg')) {
    pattern('common/figure/cover', [
        'image' => $image
    ]);
}

pattern('common/page/content');

if ($page->location()) {
    pattern('common/section/list', [
        'title' => 'Places nearby',
        'modifiers' => ['offset'],
        'items' => $page->nearby(),
        'component' => 'common/feature',
        'display' => 'grid'
    ]);
}

snippet('foot');
