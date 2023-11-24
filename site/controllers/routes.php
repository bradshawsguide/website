<?php

return function ($site, $pages, $page) {
    // Companies
    $companies = page('companies')->children()->sortBy('dirname');

    // Routes
    $routes = page('routes')->children()->listed();
    $featured = $routes->filter(function ($route) {
        return $route->hasImages();
    });

    if ($param = param('section')) {
        $routes = $routes->filterBy('section', $param);
        $featured = $featured->filterBy('section', $param);
    }

    return compact('companies', 'routes', 'featured');
};
