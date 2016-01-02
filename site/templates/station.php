<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <? snippet('page/parent', array('parent' => $page->region())); ?>

<? if($page->hasImages()): ?>
    <figure>
    <? foreach($page->images() as $image): ?>
        <img src="<?= $image->url() ?>" alt=""/>
        <? if ($image->caption()): ?>
        <figcaption>
            <?= smartypants($image->caption()) ?>
        </figcaption>
        <? endif ?>
    <? endforeach ?>
    </figure>
<? endif ?>

<? if($page->meta()->isNotEmpty()): ?>
    <?= kirbytext($page->meta()) ?>
<? endif ?>

<? if($page->text()->isNotEmpty()): ?>
    <?= kirbytext($page->text()); ?>
<? endif ?>

<? if($page->distances()->isNotEmpty()): ?>
    <table>
        <summary>Distances of Places from <?= smartypants($page->title()) ?></summary>
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
