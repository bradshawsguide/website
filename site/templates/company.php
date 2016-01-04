<? snippet('_header') ?>

<article>
    <?
        snippet('page/header', array('title' => $page->title()));

        echo kirbytext($page->text());

        $company = $page->title();
        $routes = $pages->children()->filterBy('company', $company)->sortBy('title', 'asc');
        snippet('page/section-routes', array('routes' => $routes, 'context' => 'company'));

        $company = kirby()->request()->path(2);
        $stations = $pages->children()->filterBy('company', '*=', $company);
        snippet('page/section-stations', array('stations' => $stations, 'context' => 'company'));

        snippet('page/section-related');

        snippet('shorturl');
    ?>
</article>

<? snippet('_footer') ?>
