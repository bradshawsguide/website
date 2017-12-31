<?php

return function ($site, $pages, $page) {
    $routes = page('routes')->children()->visible();

    if ($param = param('section')) {
        $routes = $routes->filterBy('section', $param);
    }

    return compact('routes');
};
