<? snippet('_header') ?>

    <main role="main">
        <section class="container">
            <header>
                <hgroup>
                    <h1><?= smartypants($page->title()) ?></h1>
                    <h2><?= smartypants($page->country()) ?></h2>
                </hgroup>
            </header>

            <div class="prose">
<?=             kirbytext($page->text()); ?>
            </div>

<?          if($page->related()): ?>
            <section>
                <h1>Related</h1>
                <ul>
<?                  foreach(related($page->related()) as $related): ?>
                    <li><a href="<?= $related->url() ?>"><?= smartypants($related->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
            </section>
<?          endif ?>

            <section class="stations index">
                <h1>Stations in This County</h1>
<?php
                $region = $page->title();
                $alphabetise = alphabetise($pages->find('stations')->children->filterBy('region', "$region")->sortBy('title', 'asc'));
    
                foreach($alphabetise as $letter => $items):
?>
                <h2 class="index"><?php echo str::upper($letter) ?></h2>
                <ul class="stations listing">
<?php               foreach($items as $item): ?>
                    <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
<?php               endforeach ?>
                </ul>
<?php           endforeach ?>
            </section>
<?          snippet('prevnext') ?>
        </section><!--/.container-->
    </main><!--/@main-->

<? snippet('_footer') ?>