<? if($page->route()->isNotEmpty()): ?>
    <section>
        <h1>Routes Serving the Station</h1>
        <?
            $routes = related($page->route());
            snippet('listing', array('items' => $routes));
        ?>
    </section>
<? endif ?>
