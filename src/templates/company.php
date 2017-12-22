<?php
snippet('head', [
    'alternate' => $page->url().'.geojson'
]);
?>

<article class="c-page">
<?php
pattern('common/page/header', [
    'parent' => $page->parent(),
    'title' => $page->title()
]);

pattern('common/page/content');

pattern('common/section/map', [
    'title' => 'Network map',
    'url' => $page->uri().'.geojson'
]);

if (count($page->featured())) {
    pattern('common/section/featured', [
        'title' => 'Key stations served',
        'items' => $page->featured()
    ]);
};

pattern('common/section/list', [
    'title' => 'All stations',
    'items' => $page->stations()
]);

pattern('common/section/routes', [
    'title' => 'Routes operated',
    'items' => $page->routes()
]);

pattern('common/section/links', [
    'title' => 'Further reading',
    'links' => $page->links()
]);
?>
</article>

<?php snippet('foot') ?>
