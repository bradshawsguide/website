<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <? snippet('page/parent', array('parent' => $page->region())); ?>

<? if($page->hasImages()): ?>
    <? snippet('figure') ?>
<? endif ?>

<? if($page->meta()->isNotEmpty()): ?>
    <?= kirbytext($page->meta()) ?>
<? endif ?>

<? if($page->text()->isNotEmpty()): ?>
    <?= kirbytext($page->text()); ?>
<? endif ?>

<? if($page->distances()->isNotEmpty()): ?>
    <? snippet('distances') ?>
<? endif ?>

<? if($page->route()->isNotEmpty()): ?>
    <? snippet('page/section-routes') ?>
<? endif ?>

<? if ($page->related()->isNotEmpty()): ?>
    <? snippet('page/section-related') ?>
<? endif ?>

    <? snippet('shorturl') ?>
    <? snippet('prevnext') ?>
</article>

<? snippet('_footer') ?>
