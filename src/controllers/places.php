<?php

return function ($site, $pages, $page) {
    $countries = page('places')->children();
    $places = $page->grandChildren()->children()->sortby('title')->filterBy('template', 'place');
    $featured = $places->filter(function ($page) {
        return $page->hasImages();
    });

    // Filter by section
    if ($sectionParam = param('section')) {
        $places = $places->filterBy('section', $sectionParam);
        $featured = $featured->filterBy('section', $sectionParam);
    };

    return compact('countries', 'places', 'featured');
};
