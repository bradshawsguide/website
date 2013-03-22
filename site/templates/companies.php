<? snippet('header') ?>
<? snippet('banner') ?>
<? $type = "stations"?>

    <main role="main">
        <section class="container">
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

<?          $items = $pages->findOpen()->children->sortBy('title', 'asc'); ?>
<?          if($items && $items->count()): ?>
<?              foreach($items as $item): ?>
                <h2><a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a></h2>
<?              $company = $item->title();
                $lines = $pages->find('lines')->children()->filterBy('company', "$company")->sortBy('title', 'asc'); ?>
                <ul class="listing">
<?                  foreach($lines as $line): ?>
                    <li><a href="<?= $line->url() ?>"<? if ($line->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($line->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
<?              endforeach ?>
<?          endif ?>
        </section>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>