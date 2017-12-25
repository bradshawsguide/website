<?php

return function ($site, $pages, $page) {
    // Default page information
    $title = $page->title();
    $subtitle = null;

    // Companies
    $companies = page('companies')->children()->sortBy('dirname');

    // Routes
    $routes = page('routes')->children()->visible();
    $featured = $routes->filter(function ($page) {
        return $page->hasImages();
    });

    if ($sectionParam = param('section')) {
        $sectionIndex = $sectionParam - 1;

        if ($sectionIndex <= 3) {
            $title = sections()[$sectionIndex]['subtitle'];
            $subtitle = sections()[$sectionIndex]['desc'];
        }
    };

    return compact('title', 'subtitle', 'companies', 'routes', 'featured');
};
