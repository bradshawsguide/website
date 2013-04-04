<? if (!isset($_GET['ajax'])) { snippet('_header'); } ?>
        <article>
            <header>
                <hgroup>
                    <h1><?= smartypants($page->title()) ?></h1>
                    <h2><a href="/regions/<?= str::urlify($page->region()) ?>"><?= smartypants($page->region()) ?></a></h2>
                </hgroup>
            </header>

<?          if (!isset($page->text)): ?>
            <div class="prose">
<?              if ($page->meta): ?>
<?=                 kirbytext($page->meta()) ?>
<?              endif ?>

<?              if($page->hasImages()): ?>
                <aside>
                    <figure>
<?                  foreach($page->images() as $image): ?>
                        <img src="<?= $image->url() ?>" alt="<?= $page->title() ?>" width="320"/>
<?                      if ($image->caption): ?>
                        <figcaption>
                            <p><?= smartypants($image->caption) ?></p>
                        </figcaption>
<?                      endif ?>
<?                  endforeach ?>
                    </figure>
                </aside>
<?              endif ?>
<?=             kirbytext($page->text); ?>
            </div>
<?          endif ?>

            <footer>
<?              if ($page->distances): ?>
                <details class="related-distances">
<?                  if ($page->region == "Isle of Wight"): ?>
                    <summary>Distances of Places from <?= smartypants($page->title) ?></summary>
<?                  else: ?>
                    <summary>Distances of Places from the Station</summary>
<?                  endif ?>
<?=                 kirbytext($page->distances); ?>
                </details>
<?              endif ?>

<?              if ($page->route): ?>
                <details class="related-routes">
                    <summary>Lines Serving the Station</summary>
                    <ul>
<?                      foreach(related($page->route()) as $routes): ?>
                        <li><a href="<?= $routes->url() ?>"><?= smartypants($routes->title()) ?></a></li>
<?                      endforeach ?>
                    </ul>
                </details>
<?              endif ?>

                <details class="related-links">
                    <summary>Related Links</summary>
<?                  if ($page->related): ?>
<?=                     kirbytext($page->related()) ?>
<?                  else: ?>
                    <p><a href="http://en.wikipedia.org/w/index.php?search=<?= urlencode($page->title()) ?>+railway+station"><?= smartypants($page->title()) ?> railway station on Wikipedia</a></p>
<?                  endif ?>
                </details>
            </footer>

<?          snippet('shorturl') ?>
<?          snippet('prevnext') ?>
        </article>
<? if (!isset($_GET['ajax'])) { snippet('_footer'); } ?>