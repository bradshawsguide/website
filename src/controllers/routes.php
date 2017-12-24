<?php

return function ($site, $pages, $page) {
    $sectionParam = param('section');
    $sectionIndex = $sectionParam - 1;

    // Page information
    $title = $page->title();
    $subtitle = null;

    if ($sectionIndex <= 3) {
        $title = sections()[$sectionIndex]['subtitle'];
        $subtitle = sections()[$sectionIndex]['desc'];
    }

    // Companies
    $companies = page('companies')->children()->sortBy('dirname');

    // Routes
    $routes = page('routes')->children()->visible();
    $featured = $routes->filter(function ($page) {
        return $page->hasImages();
    });

    if ($sectionParam) {
        $routes = $routes->filterBy('section', $sectionParam);
        $featured = $featured->filterBy('section', $sectionParam);
    };

    return compact('title', 'subtitle', 'companies', 'routes', 'featured');
};
