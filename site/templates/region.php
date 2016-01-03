<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())) ?>

    <? snippet('page/parent', array('parent' => $page->country())) ?>

    <? snippet('page/navigation') ?>

<? if($page->text()->isNotEmpty()): ?>
    <?= kirbytext($page->text()) ?>
<? endif ?>

<? if($page->related()->isNotEmpty()): ?>
    <? snippet('related') ?>
<? endif ?>

<?
$search = $pages->find('stations')->children()->filterBy('region', $page->title())->sortBy('title', 'asc');
?>
    <? snippet('page/section-stations', array('search' => $search)) ?>

<? snippet('shorturl') ?>
<? snippet('prevnext') ?>
</article>

<? snippet('_footer') ?>
