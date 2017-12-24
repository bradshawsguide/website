<?php

return function ($site, $pages, $page) {
    $routes = page('routes')->children()->filterBy('section', param('section'));

    return compact('routes');
};
