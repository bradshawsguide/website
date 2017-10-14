<?php
    $class = $page->hasImages() ? 'has-poster' : null;
    snippet('head', [
        'alternate' => $page->url().'.geojson',
        'class' => $class
    ]);
?>

<article class="c-page">
<?php
$mods = $page->hasImages() ? 'poster' : 'inverted';
pattern('common/page/header', [
    'title' => $page->displayTitle(),
    'notes' => $page->notes(),
    'parent' => $page->parent(),
    'modifiers' => [$mods]
]);

pattern('common/page/content');

pattern('common/section/links', [
    'title' => 'Further reading',
    'links' => $page->links()
]);

pattern('common/section/route-traversal', [
    'title' => 'Routes serving this station',
    'level' => 3,
    'routes' => $page->routes()
]);
?>
</article>

<?php snippet('foot') ?>
