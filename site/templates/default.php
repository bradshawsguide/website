<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <? snippet('page/navigation') ?>

    <?= kirbytext($page->text()) ?>
</article>

<? snippet('_footer') ?>
