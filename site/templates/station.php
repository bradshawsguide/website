<? snippet('_header') ?>

<article>
    <?
        snippet('page/header', array('title' => $page->title()));

        snippet('page/parent', array('parent' => $page->region()));

        snippet('figure');

        echo kirbytext($page->meta());

        echo kirbytext($page->text());

        snippet('distances');

        if($page->route()->isNotEmpty()) {
            $routes = related($page->route());
            snippet('section-routes', array('routes' => $routes, 'context' => 'station'));
        }

        snippet('section-related');

        snippet('shorturl');

        snippet('prevnext');
    ?>
</article>

<? snippet('_footer') ?>
