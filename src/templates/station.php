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

pattern('common/section/map', [
    'title' => 'Station location',
    'url' => $page->uri().'.geojson'
]);

if (!$page->place()->empty()) {
    pattern('common/card', [
        'item' => page('places/'.$page->country().DS.$page->region().DS.$page->place())
    ]);
}

pattern('common/section/links', [
    'title' => 'Further reading',
    'links' => $page->links()
]);
?>
</article>

<?php snippet('foot') ?>
