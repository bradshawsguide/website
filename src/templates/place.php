<?php
    snippet('head', [
        'alternate' => $page->url().'.geojson'
    ]);

    pattern('common/traversal-nav');
?>

<article class="c-page">
<?php
pattern('common/page/header', [
    'title' => $page->title(),
    'subtitle' => $page->subtitle()
]);

pattern('common/page/content');
?>
</article>

<?php snippet('foot') ?>
