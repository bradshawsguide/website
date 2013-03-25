<? snippet('_header') ?>

    <main role="main" id="main">
        <section class="container">
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>
<?          $items = $pages->findOpen()->children->sortBy('title', 'asc'); ?>
<?          if($items && $items->count()): ?>
            <ul class="listing">
<?              foreach($items as $item): ?>
                <li><a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a></li>
<?              endforeach ?>
            </ul>
<?          endif ?>
        </section><!--/.container-->
    </main><!--/@main-->

<? snippet('_footer') ?>