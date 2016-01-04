<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <? snippet('page/parent', array('parent' => $page->region())); ?>

    <? snippet('figure') ?>

    <?= kirbytext($page->meta()) ?>

    <?= kirbytext($page->text()); ?>

    <? snippet('distances') ?>

    <? snippet('page/section-routes') ?>

    <? snippet('page/section-related') ?>

    <? snippet('shorturl') ?>

    <? snippet('prevnext') ?>
</article>

<? snippet('_footer') ?>
