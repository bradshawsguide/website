<?php snippet('head') ?>

<article class="c-page">
<?php
$mods = $page->image('cover') ? 'poster' : null;
pattern('common/page/header', [
    'title' => $page->title(),
    'parent' => $page->parent(),
    'modifiers' => [$mods]
]);

pattern('common/page/content');

if (count($page->featured())) {
    pattern('common/section/featured', [
        'title' => 'Featured places',
        'items' => $page->featured()
    ]);
};

pattern('common/section/list', [
    'title' => 'Places in '.$page->title(),
    'items' => page('stations')->children()->filterBy('region', $page->uid())
]);
?>
</article>

<?php snippet('foot') ?>
