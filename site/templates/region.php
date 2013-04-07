<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <article>
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
                <nav role="navigation">
<?              if ($page->hasChildren()): ?>
                    <a class="is-active" href="<?= $page->url() ?>"><?= smartypants($page->title()) ?></a>
<?                  $items = $page->children()->visible();
                    foreach($items as $item): ?>
                    <a<?= ($item->isOpen()) ? ' class="is-active"' : '' ?> href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
<?                  endforeach ?>
<?              else: ?>
                    <a rel="up" href="<?= $page->parent()->url() ?>"><?= smartypants($page->country()) ?></a>
<?              endif ?>
                </nav>
            </header>

<?          if(($page->text) != ""): ?>
            <div class="prose">
<?=             kirbytext($page->text()) ?>
            </div>
<?          endif ?>

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
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>