<?php

return function ($site, $pages, $page) {
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
            $sectionTitle = sections()[$sectionIndex]['subtitle'];
            $sectionDesc = sections()[$sectionIndex]['desc'];
        }
    };

    return compact('sectionTitle', 'sectionDesc', 'companies', 'routes', 'featured');
};
