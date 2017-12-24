<?php
    snippet('head', [
        'alternate' => $page->url().'.geojson'
    ]);
?>

<article class="c-page">
<?php
pattern('common/page/header', [
    'title' => $page->displayTitle(),
    'notes' => $page->notes(),
    'parent' => $page->parent()
]);

pattern('common/page/content');
?>
</article>

<?php snippet('foot') ?>
