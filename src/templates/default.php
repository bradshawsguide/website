<?php snippet('head') ?>

<article class="c-page">
<?php
pattern('common/page/header', [
    'title' => $page->title()
]);

pattern('common/page/content', [
    'editable' => false
]);
?>
</article>

<?php snippet('foot') ?>
