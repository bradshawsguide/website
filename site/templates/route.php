<? if (!isset($_GET['ajax'])) { snippet('_header'); } ?>

        <section class="container">
            <header>
                <hgroup>
                    <h1><?= smartypants($page->title()) ?></h1>
                    <h2><a href="/companies/<?= preg_replace('/-railway$/', '', str::urlify($page->company())) ?>"><?= smartypants($page->company()) ?></a></h2>
                </hgroup>
            </header>

<?          if ($page->text() != ''): ?>
            <div class="prose">
<?=             kirbytext($page->text()) ?>
            </div><!--/@article-->
<?          endif ?>

<?
            $route = "- routes/".$site->uri->path(2);
            $items = $pages->find('stations')->children()->filterBy('route', '*=', $route);
            if ($items != ''):
?>
            <section role="complementary">
                <h1>Route Map</h1>
                <ol class="route">
<?              foreach ($items as $item): ?>
<?                  if ($item->text() == ''): ?>
                    <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
<?                  else: ?>
<?
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
<?                      if ($type == 'interchange'):?>
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
        </section><!--/.container-->

<? if (!isset($_GET['ajax'])) { snippet('_footer'); } ?>