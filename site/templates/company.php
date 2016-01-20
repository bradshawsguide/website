<? snippet('_header') ?>

<article class="c-page">
    <?
        snippet('page/header', array(
            'title' => $page->title()
        ));

        snippet('content');

        $company = $page->title();
        $routes = $pages->children()->filterBy('company', $company);
        snippet('section-routes', array(
            'routes' => $routes,
            'context' => 'company'
        ));

        $company = kirby()->request()->path(2);
        $stations = $pages->children()->filterBy('company', '*=', $company);
        snippet('section-stations', array(
            'stations' => $stations,
            'context' => 'company'
        ));

        snippet('section-related');

        snippet('shorturl');
    ?>
</article>

<? snippet('_footer') ?>
