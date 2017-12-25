<?php
    snippet('head', [
        'alternate' => $page->url().'.geojson'
    ]);

    pattern('common/traversal-nav');
?>

<article class="c-page">
<?php
pattern('common/page/header', [
    'title' => $page->displayTitle()
]);

pattern('common/page/content');
?>
</article>

<?php snippet('foot') ?>
