<?php

return function ($site, $pages, $page) {
    // Companies
    $companies = page("companies")->children()->sortBy("dirname");

    // Routes
    $routes = page("routes")->children()->listed();

    if ($param = param("section")) {
        $routes = $routes->filterBy("section", $param);
    }

    return compact("companies", "routes");
};
