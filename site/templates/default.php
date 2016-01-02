<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <? snippet('page/navigation') ?>

<? if($page->text()->isNotEmpty()): ?>
    <?= kirbytext($page->text()) ?>
<? endif ?>

<? if($page->related()->isNotEmpty()): ?>
    <? snippet('related') ?>
<? endif ?>

</article>

<? snippet('_footer') ?>
