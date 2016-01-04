<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <? snippet('page/parent', array('parent' => $page->company())); ?>

    <?= kirbytext($page->text()) ?>

    <? snippet('routemap') ?>

    <? snippet('page/section-related') ?>

    <? snippet('shorturl') ?>
</article>
<? snippet('_footer') ?>
