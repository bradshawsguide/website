<?php

return function ($site, $pages, $page) {
    $companies = page('companies')->children()->sortBy('dirname');
    $routes = page('routes')->children()->visible();
    $featured = $routes->filter(function ($page) {
        return $page->hasImages();
    });

    // Filter by section
    if ($sectionParam = param('section')) {
        $routes = $routes->filterBy('section', $sectionParam);
        $featured = $featured->filterBy('section', $sectionParam);
    };

    return compact('companies', 'routes', 'featured');
};
