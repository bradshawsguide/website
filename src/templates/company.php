<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

pattern('common/page/header', [
    'parent' => html::a($page->parent()->url(), $page->parent()->title()),
    'title' => $page->title()
]);

pattern('common/page/content');

pattern('common/section/list', [
    'title' => 'All stations',
    'items' => $page->stations()
]);

pattern('common/section/routes', [
    'title' => 'Routes operated',
    'items' => $page->routes()
]);

pattern('common/section/text', [
    'title' => 'Further reading',
    'text' => $page->links()
]);

pattern('common/map', [
    'url' => $page->uri().'.geojson',
    'title' => 'Network map'
]);

snippet('foot');
