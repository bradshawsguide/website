<section>
    <h1>Routes Serving the Station</h1>
    <ul>
    <? foreach(related($page->route()) as $routes): ?>
        <li><a href="<?= $routes->url() ?>"><?= smartypants($routes->title()) ?></a></li>
    <? endforeach ?>
    </ul>
</section>
