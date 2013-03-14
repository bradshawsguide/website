<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <section class="container">
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

            <div class="prose">
                <?= kirbytext($page->text()) ?>
            </div>

            <section>
                <h1>Lines Operated</h1>
                <?
                    $company2 = $page->title();
                    $items2 = $pages->find('lines')->children()->filterBy('company', "$company2")->sortBy('title', 'asc');
                ?>
                <ul class="lines listing">
                <? foreach($items2 AS $item2): ?>
                    <li><a href="<?= $item2->url() ?>"><?= smartypants($item2->title().' '.$item2->type()) ?></a></li>
                <? endforeach ?>
                </ul>
            </section>

            <section>
                <h1>Stations Served</h1>
                <?php
                    $company = $site->uri->path(2);
                    $alphabetise = alphabetise($pages->find('stations')->children()->filterBy('company', '*=', "$company")->sortBy('title', 'asc'));
                    
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
        </section>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>