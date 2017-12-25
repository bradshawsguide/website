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
    pattern('common/section-nav');
?>

<section class="c-page">
<?php
pattern('common/page/header', [
    'title' => $title,
    'subtitle' => $subtitle,
    'modifiers' => ['index']
]);

pattern('common/tablist');

if (get('view') == 'map') {
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
            'items' => $company->routes()
        ]);
    }
}
?>
</section>

<?php snippet('foot') ?>
