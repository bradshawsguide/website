<?php
    snippet('head');

    pattern('common/traversal-nav', [
        'parent' => $page->parent(),
        'prev' => $page->prev(),
        'next' => $page->next()
    ]);
?>

<section class="c-page">
<?php
pattern('common/page/header', [
    'pretitle' => 'A descriptive guide to places in',
    'title' => $page->title(),
    'modifiers' => ['index']
]);

if (count($page->featured())) {
    pattern('common/section/featured', [
        'title' => 'Featured places',
        'items' => $page->featured()
    ]);
};

pattern('common/section/list', [
    'title' => $page->subdivision(),
    'items' => $page->children()
]);
?>
</section>

<?php snippet('foot') ?>
