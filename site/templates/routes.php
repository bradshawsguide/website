<? snippet('_header') ?>

    <main role="main">
        <section class="container">
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

<?          $items = $pages->find('companies')->children->sortBy('title', 'asc'); ?>
<?          if($items && $items->count()): ?>
<?              foreach($items as $item): ?>
                <h2><a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a></h2>
<?              $company = $item->title();
                $routes = $pages->find('routes')->children()->filterBy('company', "$company")->sortBy('title', 'asc'); ?>
                <ul class="listing">
<?                  foreach($routes as $route): ?>
                    <li><a href="<?= $route->url() ?>"<? if ($route->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($route->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
<?              endforeach ?>
<?          endif ?>
        </section>
    </main><!--/@main-->

<? snippet('_footer') ?>