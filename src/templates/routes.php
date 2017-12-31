<?php

// Redirect
$view = (get('view') == true) ? get('view') : 'list';

if (param('section') == null) {
    go($page->uri().'/section:1?view='.$view);
};

if (get('view') == null) {
    go($page->uri().'/section:'.param('section').'?view=list');
};

// Page content
snippet('head', [
    'alternate' => $page->url().'.geojson'.'/section:'.param('section')
]);

pattern('common/page/header', [
    'title' => $page->title(),
    'modifiers' => ['index']
]);

pattern('common/tablist', [
    'currentURL' => '/routes/section:'.param('section')
]);

pattern('common/page/content', [
    'proseModifiers' => ['centered'],
    'editable' => false
]);

if (count($routes)) {
    pattern('common/switch');

    if (get('view') == 'map') {
        pattern('common/map', [
            'url' => $page->uri().'.geojson/'.$kirby->request()->params(),
            'title' => 'Routes plotted on a map',
            'modifiers' => ['cover']
        ]);
    } else {
        pattern('common/section/list', [
            'title' => 'Featured routes',
            'items' => $featured->filterBy('section', param('section')),
            'component' => 'common/feature',
            'display' => 'grid'
        ]);

        foreach ($companies as $company) {
            $items = $company->routes()->filterBy('section', param('section'));

            if (count($items)) {
                pattern('common/section/list', [
                    'title' => html::a($company->url(), $company->title()),
                    'items' => $items,
                    'component' => 'common/route-item'
                ]);
            }
        }
    }
}

snippet('foot');
