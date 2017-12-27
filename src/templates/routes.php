<?php
if (get('view') == null) {
    go($page->uri().'/section:'.param('section').'?view=list');
};
if (param('section') == null) {
    go($page->uri().'/section:1');
};

snippet('head', [
    'alternate' => $page->url().'.geojson'.'/section:'.param('section')
]);

pattern('common/page/header', [
    'title' => $page->title(),
    'modifiers' => ['index']
]);

pattern('common/section-nav');

echo $sectionTitle.'<br>';
echo $sectionDesc;

pattern('common/tablist');

if (get('view') == 'map') {
    pattern('common/map', [
        'url' => $page->uri().'.geojson/'.$kirby->request()->params(),
        'title' => 'Routes plotted on a map',
        'class' => 'cover'
    ]);
} else {
    pattern('common/section/list', [
        'title' => 'Featured routes',
        'items' => $featured->filterBy('section', param('section')),
        'component' => 'common/feature',
        'display' => 'grid'
    ]);

    foreach ($companies as $company) {
        pattern('common/section/list', [
            'title' => html::a($company->url(), $company->title()),
            'items' => $company->routes()->filterBy('section', param('section')),
            'component' => 'common/route-item'
        ]);
    }
}

snippet('foot');
