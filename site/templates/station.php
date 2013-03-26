<? if (!isset($_GET['ajax'])) { snippet('_header'); } ?>

        <article class="container">
            <header>
                <hgroup>
                    <h1><?= smartypants($page->title()) ?></h1>
                    <h2><a href="/regions/<?= str::urlify($page->region()) ?>"><?= smartypants($page->region()) ?></a></h2>
                </hgroup>
            </header>

<?          if (!isset($page->text)): ?>
            <div class="prose">
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
<?=             kirbytext($page->text()); ?>
            </div>
<?          endif ?>

            <footer class="meta">
<?              if (!isset($page->meta)): ?>
                <section>
                    <h1 class="hidden">About This Station</h1>
<?=                 kirbytext($page->meta()) ?>
                </section>
<?              endif ?>

<?              if (!isset($page->route)): ?>
                <details open>
                    <summary>Lines serving this station:</summary>
                    <ul>
<?                      foreach(related($page->route()) as $routes): ?>
                        <li><a href="<?= $routes->url() ?>"><?= smartypants($routes->title()) ?></a></li>
<?                      endforeach ?>
                    </ul>
                </details>
<?              endif ?>

<?              if (!isset($page->related)): ?>
                <details>
                    <summary>Related Links</summary>
<?=                 kirbytext($page->related()) ?>
                </details>
<?              endif ?>
            </footer>

<?          snippet('shorturl') ?>
<?          snippet('prevnext') ?>
        </article>

<? if (!isset($_GET['ajax'])) { snippet('_footer'); } ?>