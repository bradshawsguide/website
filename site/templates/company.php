<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <article>
            <header>
                <h1><?= smartypants($page->title()) ?></h1>
            </header>

            <div class="prose">
<?=             kirbytext($page->text()) ?>
            </div>

            <section>
                <h1>Routes Operated</h1>
<?
                $company2 = $page->title();
                $items2 = $pages->find('routes')->children()->filterBy('company', "$company2")->sortBy('title', 'asc');
?>
                <ul class="listing">
<?                  foreach($items2 AS $item2): ?>
                    <li><a href="<?= $item2->url() ?>"><?= smartypants($item2->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
            </section>

            <section>
                <h1>Stations Served</h1>
<?
                $company = $site->uri->path(2);
                $alphabetise = alphabetise($pages->find('stations')->children()->filterBy('company', '*=', "$company")->sortBy('title', 'asc'));
                foreach($alphabetise as $letter => $items):
?>
                <h2 class="index"><?php echo str::upper($letter) ?></h2>
                <ul class="stations listing">
<?                  foreach($items as $item): ?>
                    <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
<?                  endforeach ?>
                </ul>
<?              endforeach ?>
            </section>

            <footer>
                <details class="related-links">
                    <summary>Related Links</summary>
<?                  if ($page->related): ?>
<?=                     kirbytext($page->related()) ?>
<?                  else: ?>
                    <p><a href="http://en.wikipedia.org/w/index.php?search=<?= urlencode($page->title()) ?>"><?= smartypants($page->title()) ?> on Wikipedia</a></p>
<?                  endif ?>
                </details>
            </footer>

<?          snippet('shorturl') ?>
        </article>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>