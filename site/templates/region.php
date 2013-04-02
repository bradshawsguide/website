<? if (!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <article>
            <header>
                <hgroup>
                    <h1><?= smartypants($page->title()) ?></h1>
                    <h2><?= smartypants($page->country()) ?></h2>
                </hgroup>
            </header>

            <div class="prose">
<?=             kirbytext($page->text()); ?>
            </div>

<?      if ($page->type() == 'parent'):
            $items = $page->children()->visible();
            if($items && $items->count()): ?>
            <nav role="navigation">
                <h1><a href="<?= $page->url(); ?>"><?= $page->title(); ?></a></h1>
                <ul>
<?                  foreach($items as $item): ?>
                    <li><a<?= ($item->isOpen()) ? ' class="is-active"' : '' ?> href="<?= $item->url() ?>"><?= html($item->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
            </nav>
<?          endif ?>
<?      elseif ($page->type() == 'child'):
            $items = $page->siblings()->visible();
            if($items && $items->count()): ?>
            <nav role="navigation">
                <h1><a href="<?= $page->parent()->url(); ?>"><?= $page->parent()->title(); ?></a></h1>
                <ul>
<?                  foreach($items as $item): ?>
                    <li><a<?= ($item->isOpen()) ? ' class="is-active"' : '' ?> href="<?= $item->url() ?>"><?= html($item->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
            </nav>
<?          endif ?>
<?      endif ?>

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

<?          $region = $page->title();
            $search = $pages->find('stations')->children->filterBy('region', "$region")->sortBy('title', 'asc');
            
            if ($search != ""): ?>
            <section class="stations index">
                <h1>Stations in This County</h1>
<?              $alphabetise = alphabetise($search);
                foreach($alphabetise as $letter => $items): ?>
                <h2 class="index"><?= str::upper($letter) ?></h2>
                <ul class="stations listing">
<?                  foreach($items as $item): ?>
                    <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
<?              endforeach ?>
<?          endif ?>
            </section>
<?          snippet('shorturl') ?>
<?          snippet('prevnext') ?>
        </article>
<? if (!isset($_GET['ajax'])) { snippet('_footer'); } ?>