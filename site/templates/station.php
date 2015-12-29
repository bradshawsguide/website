<? if(!isset($_GET['ajax'])) { snippet('_header'); } ?>
<article class="h-entry">
    <header>
        <h1 class="p-name"><?= smartypants($page->title()) ?></h1>
        <?php $region = $page->region(); ?>
        <nav>
            <a rel="up" href="<?= $pages->index()->findBy('title', "$region")->url(); ?>"><?= smartypants($region) ?></a>
        </nav>
    </header>

<? if($page->text()->isNotEmpty()): ?>
    <div class="e-content prose">
    <? if($page->meta()): ?>
        <?= kirbytext($page->meta()) ?>
    <? endif ?>

    <? if($page->hasImages()): ?>
        <aside>
            <figure>
            <? foreach($page->images() as $image): ?>
                <img src="<?= $image->url() ?>" alt="<?= $page->title() ?>" width="320"/>
                <? if ($image->caption()): ?>
                <figcaption>
                    <p><?= smartypants($image->caption()) ?></p>
                </figcaption>
                <? endif ?>
            <? endforeach ?>
            </figure>
        </aside>
    <? endif ?>

        <?= kirbytext($page->text()); ?>
    </div>
<? endif ?>

    <footer>
<? if($page->distances()->isNotEmpty()): ?>
        <details class="related-distances">
        <? if ($page->region() == "Isle of Wight"): ?>
            <summary>Distances of Places from <?= smartypants($page->title()) ?></summary>
        <? else: ?>
            <summary>Distances of Places from the Station</summary>
        <? endif ?>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Miles.</th>
                    </tr>
                </thead>
                <tbody>
                    <? foreach($page->distances()->yaml() as $distance): ?>
                    <tr>
                        <td><?= kirbytextRaw($distance['location']) ?></td>
                        <td><?= $distance['miles'] ?></td>
                    </tr>
                    <? endforeach ?>
                </tbody>
            </table>
        </details>
<? endif ?>

<? if($page->route()->isNotEmpty()): ?>
        <details class="related-routes">
            <summary>Routes Serving the Station</summary>
            <ul>
            <? foreach(related($page->route()) as $routes): ?>
                <li><a href="<?= $routes->url() ?>"><?= smartypants($routes->title()) ?></a></li>
            <? endforeach ?>
            </ul>
        </details>
<? endif ?>

        <details class="related-links">
            <summary>Related Links</summary>
            <? if($page->related()->isNotEmpty()): ?>
                <?= kirbytext($page->related()) ?>
            <? else: ?>
                <p><a href="http://en.wikipedia.org/w/index.php?search=<?= urlencode($page->title()) ?>+railway+station"><?= smartypants($page->title()) ?> railway station on Wikipedia</a></p>
            <? endif ?>
        </details>
    </footer>

    <? snippet('shorturl') ?>
    <? snippet('prevnext') ?>
</article>
<? if(!isset($_GET['ajax'])) { snippet('_footer'); } ?>
