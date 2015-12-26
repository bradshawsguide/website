<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
<article>
    <header>
        <? if ($page->type() == 'parent'): ?>
            <h1><?= smartypants($page->title()) ?></h1>
            <?
            $items = $page->children()->visible();
            if($items && $items->count()):
            ?>
                <nav role="navigation">
                    <a class="is-active" href="<?= $page->url() ?>"><?= smartypants($page->title()) ?></a>
                    <? foreach($items as $item): ?>
                        <a<?= ($item->isOpen()) ? ' class="is-active"' : '' ?> href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
                    <? endforeach ?>
                </nav>
            <? endif ?>

        <? elseif ($page->type() == 'child'): ?>
            <h1><?= smartypants($page->parent()->title()) ?></h1>
            <?
            $items = $page->siblings()->visible();
            if($items && $items->count()):
            ?>
                <nav role="navigation">
                    <a href="<?= $page->parent()->url(); ?>"><?= smartypants($page->parent()->title()) ?></a>
                    <? foreach($items as $item): ?>
                        <a<?= ($item->isOpen()) ? ' class="is-active"' : '' ?> href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
                    <? endforeach ?>
                </nav>
            <? endif ?>
        <? endif ?>
    </header>

<? if($page->text()->isNotEmpty()): ?>
    <div class="prose">
        <?= kirbytext($page->text()) ?>
    </div>
<? endif ?>

<? if($page->related()->isNotEmpty()): ?>
    <section>
        <h1>Related</h1>
        <ul class="listing">
        <? foreach(related($page->related()) as $related): ?>
            <li><a href="<?= $related->url() ?>"><?= smartypants($related->title()) ?></a></li>
        <? endforeach ?>
        </ul>
    </section>
<? endif ?>

<? snippet('shorturl') ?>
</article>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>
