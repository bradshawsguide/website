<? if (!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <article>
            <header>
                <hgroup>
                    <h1><?= smartypants($page->title()) ?></h1>
<?                  $company = $page->company(); ?>
<?                  if ($company == 'Isle of Wight'): ?>
                    <h2><a href="/regions/isle-of-wight">Isle of Wight</a></h2>
<?                  elseif ($company == 'London'): ?>
                    <h2><a href="/regions/london">London</a></h2>
<?                  else: ?>
                    <h2><a href="/companies/<?= preg_replace('/-railway$/', '', str::urlify($page->company())) ?>"><?= smartypants($page->company()) ?></a></h2>
<?                  endif ?>
                </hgroup>
            </header>

<?          if (!isset($page->text)): ?>
            <div class="prose">
<?=             kirbytext($page->text()) ?>
            </div>
<?          endif ?>

<?
            $route = "- routes/".$site->uri->path(2);
            $items = $pages->find('stations')->children()->filterBy('route', '*=', $route);
            if (isset($items)):
?>
            <section role="complementary">
                <h1>Route Map</h1>
                <ol class="route">
<?              foreach ($items as $item): ?>
<?                  if ($item->text() == ''): ?>
                    <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
<?                  else:
                        $routes = related($item->route());
                        $type = 'station';
                        foreach ($routes as $connection) {
                            if ($connection->title() !== $page->title()) {
                                $type = 'interchange';
                            }
                        }
?>
                    <li class="<?= $type ?>">
                        <a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
<?                      if ($type == 'interchange'): ?>
                        <ul>
<?                      endif ?>
<?                      foreach ($routes as $connection): ?>
<?                          if ($connection->title() !== $page->title()): ?>
                            <li><a href="<?= $connection->url() ?>"><?= smartypants($connection->title()) ?></a></li>
<?                          endif ?>
<?                      endforeach ?>
<?                      if ($type == 'interchange'): ?>
                        </ul>
<?                      endif ?>
                    </li>
<?                  endif ?>
<?              endforeach ?>
                </ol><!--/.route-->
            </section><!--/@complementary-->
<?          endif ?>

<?          if ($page->related): ?>
            <footer>
                <details class="related-links">
                    <summary>Related Links</summary>
<?=                 kirbytext($page->related()) ?>
                </details>
            </footer>
<?          endif ?>

<?          snippet('shorturl') ?>
        </article>
<? if (!isset($_GET['ajax'])) { snippet('_footer'); } ?>