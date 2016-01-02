<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <? snippet('page/parent', array('parent' => $page->country())); ?>

    <? snippet('page/navigation') ?>

<? if($page->text()->isNotEmpty()): ?>
    <?= kirbytext($page->text()) ?>
<? endif ?>

<? if($page->related()->isNotEmpty()): ?>
    <? snippet('related') ?>
<? endif ?>

<?
$region = $page->title();
$search = $pages->find('stations')->children()->filterBy('region', $region)->sortBy('title', 'asc');
?>
    <section>
        <h1>Stations in This County</h1>
        <? $alphabetise = alphabetise($search) ?>
        <? foreach($alphabetise as $letter => $items): ?>
            <h2 id="<?= $letter ?>"><?= str::upper($letter) ?></h2>
            <ul>
            <? foreach($items as $item): ?>
                <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
            <? endforeach ?>
            </ul>
        <? endforeach ?>
    </section>

<? snippet('shorturl') ?>
<? snippet('prevnext') ?>
</article>

<? snippet('_footer') ?>
