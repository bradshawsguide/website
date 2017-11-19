<?php
    if (param('view') == null) {
        go($page->uri().'/section:1/view:list');
    };
    snippet('head', [
        'alternate' => $page->url().'.geojson'.'/section:'.param('section')
    ]);
?>

<section class="c-page">
<?php
pattern('common/page/header', [
    'title' => $page->title()
]);

pattern('common/tablist');

if (param('view') == 'map') {
    pattern('common/figure/map', [
        'url' => $page->uri().'.geojson/'.$kirby->request()->params(),
        'class' => 'cover'
    ]);
} else {
    pattern('common/section/featured', [
        'title' => 'Featured routes',
        'items' => $featured
    ]);

    foreach ($companies as $company) {
        pattern('common/section/routes', [
            'title' => html::a($company->url(), $company->title()),
            'items' => $routes->filterBy('company', '*=', $company->uid())
        ]);
    }
}
?>
</section>

<?php snippet('foot') ?>
