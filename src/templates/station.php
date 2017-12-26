<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

pattern('common/page/header', [
    'parent' => html::a($page->parent()->url(), $page->parent()->title()),
    'title' => $page->title(),
    'subtitle' => $page->subtitle()
]);

if (!$page->place()->empty()) {
    pattern('common/card', [
        'item' => $page->placePage()
    ]);
}

pattern('common/section/route-traversal', [
    'title' => 'Routes serving this station',
    'level' => 3,
    'routes' => $page->routes()
]);

pattern('common/section/links', [
    'title' => 'Further reading',
    'links' => $page->links()
]);

pattern('common/map', [
    'url' => $page->uri().'.geojson/'.$kirby->request()->params().'&zoom=14',
    'title' => 'Location of this station',
    'class' => 'cover'
]);

snippet('foot');
