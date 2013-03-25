<? snippet('_header') ?>

    <main role="main" id="main">
        <article class="container">
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

            <div class="prose">
<?=             kirbytext($page->text()) ?>
            </div>

<?          if($page->related()): ?>
            <section>
                <h1>Related</h1>
                <ul class="listing">
<?                  foreach(related($page->related()) as $related): ?>
                    <li><a href="<?= $related->url() ?>"><?= smartypants($related->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
            </section>
<?          endif ?>

<?          
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

        </article><!--/.container-->
    </main><!--/@main-->

<? snippet('_footer') ?>