<?php snippet('head') ?>

<section class="c-page">
<?php
pattern('common/page/header', [
    'title' => $page->title()
]);

foreach (alphabetise($page->children()) as $letter => $items):
    pattern('common/index', [
        'items' => $items,
        'letter' => $letter
    ]);
endforeach;
?>
</section>

<?php snippet('foot') ?>
