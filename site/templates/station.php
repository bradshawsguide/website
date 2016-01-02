<? snippet('_header') ?>

<article>
    <header>
        <h1><?= smartypants($page->title()) ?></h1>
        <?php $region = $page->region(); ?>
        <nav>
            <a rel="up" href="<?= $pages->index()->findBy('title', "$region")->url(); ?>"><?= smartypants($region) ?></a>
        </nav>
    </header>

<? if($page->text()->isNotEmpty()): ?>
    <? if($page->meta()): ?>
        <?= kirbytext($page->meta()) ?>
    <? endif ?>

    <? if($page->hasImages()): ?>
        <figure>
        <? foreach($page->images() as $image): ?>
            <img src="<?= $image->url() ?>" alt="<?= $page->title() ?>"/>
            <? if ($image->caption()): ?>
            <figcaption>
                <?= smartypants($image->caption()) ?>
            </figcaption>
            <? endif ?>
        <? endforeach ?>
        </figure>
    <? endif ?>

    <?= kirbytext($page->text()); ?>
<? endif ?>

<? if($page->distances()->isNotEmpty()): ?>
    <section>
    <? if ($page->region() == "Isle of Wight"): ?>
        <h1>Distances of Places from <?= smartypants($page->title()) ?></h1>
    <? else: ?>
        <h1>Distances of Places from the Station</h1>
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
    </section>
<? endif ?>

<? if($page->route()->isNotEmpty()): ?>
    <section>
        <h1>Routes Serving the Station</h1>
        <ul>
        <? foreach(related($page->route()) as $routes): ?>
            <li><a href="<?= $routes->url() ?>"><?= smartypants($routes->title()) ?></a></li>
        <? endforeach ?>
        </ul>
    </section>
<? endif ?>

    <section>
        <h1>Related Links</h1>
        <? if($page->related()->isNotEmpty()): ?>
            <?= kirbytext($page->related()) ?>
        <? else: ?>
            <p><a href="http://en.wikipedia.org/w/index.php?search=<?= urlencode($page->title()) ?>+railway+station"><?= smartypants($page->title()) ?> railway station on Wikipedia</a></p>
        <? endif ?>
    </section>

    <? snippet('shorturl') ?>
    <? snippet('prevnext') ?>
</article>

<? snippet('_footer') ?>
