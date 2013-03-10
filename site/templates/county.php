<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <div class="container">
            <h1><?= smartypants($page->title()) ?></h1>

            <?= preg_replace('/^(<.+?>\s*)+?(\w+)/i', '\1<span class="first-word">\2</span>', kirbytext($page->text())); ?>

            <? if($page->related()): ?>
            <section>
                <h1>Related</h1>
                <ul>
                <? foreach(related($page->related()) as $related): ?>
                    <li><a href="<?= $related->url() ?>"><?= smartypants($related->title()) ?></a></li>
                <? endforeach ?>
                </ul>
            </section>
            <? endif ?>

            <section class="stations index">
                <h1>Stations in this county</h1>
                <?php
                    $county = $page->title();
                    $alphabetise = alphabetise($pages->find('stations')->children->filterBy('county', "$county")->sortBy('title', 'asc'));
                    
                    foreach($alphabetise as $letter => $items):
                ?>
                <h2 class="index"><?php echo str::upper($letter) ?></h2>
                <ul class="stations listing">
                    <?php foreach($items as $item): ?>
                    <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
                    <?php endforeach ?>
                </ul>
                <?php endforeach ?>
            </section>
        </div>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>