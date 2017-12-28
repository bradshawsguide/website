<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

pattern('common/traverse');

if (!$page->stops()->empty()) {
    pattern('common/map', [
        'url' => $page->uri().'.geojson/',
        'title' => 'Map of this route',
        'modifiers' => ['cover']
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

if (!$page->links()->empty()) {
    pattern('common/section/text', [
        'title' => 'Further reading',
        'text' => $page->links()
    ]);
}

snippet('foot');
