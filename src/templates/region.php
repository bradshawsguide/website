<?php
    snippet('head');

    pattern('common/traversal-nav', [
        'parent' => $page->parent(),
        'prev' => $page->prev(),
        'next' => $page->next()
    ]);
?>

<article class="c-page">
<?php
pattern('common/page/header', [
    'pretitle' => 'A descriptive guide to',
    'title' => $page->title(),
    'modifiers' => ['index']
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
    'items' => $page->children()
]);
?>
</article>

<?php snippet('foot') ?>
