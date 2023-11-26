<?php

snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

snippet('header', [
    'parent' => Html::a($page->parent()->url(), $page->parent()->title()),
    'title' => $page->title(),
    'subtitle' => $page->subtitle()
]);

if ($image = $page->image('cover.jpg')) {
    snippet('figure', [
        'image' => $image
    ]);
}

snippet('page/content');

// TODO: Add location information to place data
// if (size($page->nearby())) {
//     snippet('section/list', [
//         'title' => 'Places nearby',
//         'modifiers' => ['offset'],
//         'items' => $page->nearby(),
//         'component' => 'feature',
//         'display' => 'grid'
//     ]);
// }

snippet('foot');
