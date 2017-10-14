<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);
?>

<article class="c-page">
<?php
pattern('common/page/header', [
    'parent' => page('/routes/'),
    'title' => $page->title(),
    'subtitle' => $subtitle
]);

pattern('common/figure/map', [
    'url' => $page->uri().'.geojson/',
    'caption' => 'Route map',
    'class' => 'cover'
]);

pattern('common/page/content');

pattern('common/section/links', [
    'title' => 'Further reading',
    'links' => $page->links()
]);
?>
</article>

<?php snippet('foot') ?>
