<?php

return function ($site, $pages, $page) {
    // Companies
    $companies = page('companies')->children()->sortBy('dirname');

    // Routes
    $routes = page('routes')->children()->visible();
    $featured = $routes->filter(function ($page) {
        return $page->hasImages();
    });

    if ($param = param('section')) {
        $routes = $routes->filterBy('section', $param);
        $featured = $featured->filterBy('section', $param);
    }

    return compact('companies', 'routes', 'featured');
};
