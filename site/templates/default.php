<? if (!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <article>
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

            <div class="prose">
<?=             kirbytext($page->text()) ?>
            </div>

<?      if($page->related()): ?>
            <section>
                <h1>Related</h1>
                <ul class="listing">
<?                  foreach(related($page->related()) as $related): ?>
                    <li><a href="<?= $related->url() ?>"><?= smartypants($related->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
            </section>
<?      endif ?>

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

<?          snippet('shorturl') ?>
        </article>
<? if (!isset($_GET['ajax'])) { snippet('_footer'); } ?>