<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

pattern('common/header', [
    'parent' => html::a($page->parent()->url(), $page->parent()->title()),
    'title' => $page->title()
]);

pattern('common/page/content');

pattern('common/section/list', [
    'title' => 'Routes operated',
    'items' => $page->routes(),
    'component' => 'common/route-item'
]);

pattern('common/map', [
    'url' => $page->uri().'.geojson',
    'title' => 'Network map',
    'modifiers' => ['cover']
]);

pattern('common/section/list', [
    'title' => 'All stations',
    'items' => $page->stations(),
    'display' => 'columns'
]);

pattern('common/section/text', [
    'title' => 'Further reading',
    'text' => $page->links()
]);

snippet('foot');
