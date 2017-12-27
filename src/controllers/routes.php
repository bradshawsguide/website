<?php

return function ($site, $pages, $page) {
    // Companies
    $companies = page('companies')->children()->sortBy('dirname');

    // Routes
    $routes = page('routes')->children()->visible();
    $featured = $routes->filter(function ($page) {
        return $page->hasImages();
    });

    return compact('companies', 'routes', 'featured');
};
