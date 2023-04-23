<?php

return function ($site, $pages, $page) {
    $routes = page('routes')->children()->listed();

    if ($param = param('section')) {
        $routes = $routes->filterBy('section', $param);
    }

    return compact('routes');
};
