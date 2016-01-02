<? snippet('_header') ?>

<article>
    <header>
        <h1><?= smartypants($page->title()) ?></h1>
        <nav role="navigation">
        <? if ($page->hasChildren()): ?>
            <a class="is-active" href="<?= $page->url() ?>"><?= smartypants($page->title()) ?></a>
            <? $items = $page->children()->visible(); ?>
            <? foreach($items as $item): ?>
                <a<? e($page->isOpen(), ' class="is-active"') ?> href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
            <? endforeach ?>
        <? else: ?>
            <a rel="up" href="<?= $page->parent()->url() ?>"><?= smartypants($page->country()) ?></a>
        <? endif ?>
        </nav>
    </header>

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
