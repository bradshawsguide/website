<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <div class="container">
            <h1><?= smartypants($page->title()) ?></h1>
            <? $items = $pages->findOpen()->children->sortBy('title', 'asc'); ?>
            <? if($items && $items->count()): ?>
            <ul class="listing">
            <? foreach($items as $item): ?>
                <li><a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a></li>
            <? endforeach ?>
            </ul>
            <? endif ?>
        </div>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>