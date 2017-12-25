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
        'class' => 'cover'
    ]);
} else {
    pattern('common/section/featured', [
        'title' => 'Featured routes',
        'items' => $featured->filterBy('section', param('section'))
    ]);

    foreach ($companies as $company) {
        pattern('common/section/routes', [
            'title' => html::a($company->url(), $company->title()),
            'items' => $company->routes()->filterBy('section', param('section'))
        ]);
    }
}

snippet('foot');
