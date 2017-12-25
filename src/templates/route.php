<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);

pattern('common/traversal-nav');
?>

<article class="c-page">
<?php
pattern('common/page/header', [
    'parent' => $page->operator(),
    'title' => $page->title()
]);

if (!$page->stops()->empty()) {
    pattern('common/figure/map', [
        'url' => $page->uri().'.geojson/',
        'caption' => 'Route map',
        'class' => 'cover'
    ]);
}

pattern('common/page/content');

pattern('common/section/links', [
    'title' => 'Further reading',
    'links' => $page->links()
]);
?>
</article>

<?php snippet('foot') ?>
