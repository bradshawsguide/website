<?php

return function ($site, $pages, $page) {
    $places = $page->grandChildren()->children()->sortby('title')->filterBy('template', 'place');

    // Filter by section
    if ($sectionParam = param('section')) {
        $places = $places->filterBy('section', $sectionParam);
    };

    return compact('places');
};
