<? snippet('_header') ?>

<article class="c-page">
    <?
        snippet('page/parent', array(
            'parent' => $page->region()
        ));

        snippet('page/header', array(
            'title' => $page->title()
        ));

        snippet('figure');

        if($page->info()->isNotEmpty()) {
            snippet('info');
        } else {
            // temporary
            echo kirbytext($page->meta());
        }

        snippet('content');

        snippet('distances');

        if($page->route()->isNotEmpty()) {
            $routes = related($page->route());
            snippet('section-routes', array(
                'routes' => $routes,
                'context' => 'station'
            ));
        }

        snippet('section-related');

        snippet('shorturl');

        snippet('prevnext');
    ?>
</article>

<? snippet('_footer') ?>
