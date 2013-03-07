<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <div class="container">
            <h1><?= smartypants($page->title()) ?></h1>

            <?= kirbytext($page->text()) ?>

            <? if($page->related()): ?>
            <section>
                <h1>Related</h1>
                <ul class="listing">
                <? foreach(related($page->related()) as $related): ?>
                    <li><a href="<?= $related->url() ?>"><?= smartypants($related->title()) ?></a></li>
                <? endforeach ?>
                </ul>
            </section>
            <? endif ?>
        </div>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>