<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

pattern('common/traversal-nav');

if (!$page->stops()->empty()) {
    pattern('common/map', [
        'url' => $page->uri().'.geojson/',
        'title' => 'Map of this route',
        'class' => 'cover'
    ]);
}

pattern('common/page/header', [
    'parent' => $page->operator(),
    'title' => $page->title(),
    'subtitle' => $page->subtitle()
]);

pattern('common/page/content', [
    'proseModifiers' => ['route']
]);

pattern('common/section/text', [
    'title' => 'Further reading',
    'text' => $page->links()
]);

snippet('foot');
