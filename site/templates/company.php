<? snippet('_header') ?>

<article>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <?= kirbytext($page->text()) ?>

    <section>
        <h1>Routes Operated</h1>
        <?
            $company = $page->title();
            $routes = $pages->children()->filterBy('company', $company)->sortBy('title', 'asc');
            snippet('listing', array('items' => $routes));
        ?>
    </section>

    <section>
        <h1>Stations Served</h1>
        <?
            $company = kirby()->request()->path(2);
            $stations = $pages->children()->filterBy('company', '*=', $company)->sortBy('title', 'asc');
            snippet('alphabetise', array('search' => $stations));
        ?>
    </section>

    <? snippet('page/section-related') ?>

    <? snippet('shorturl') ?>
</article>

<? snippet('_footer') ?>
