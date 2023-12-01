<?php

return function ($site) {
    $geo = get("g");
    $query = get("q");
    $paginate = 20;
    $options = [
        "minlength" => 2,
        "fields" => ["title", "text"],
        "words" => true,
        "score" => [
            "region" => 20,
            "title" => 10,
            "route" => 2,
            "text" => 1,
        ],
    ];

    if ($query == true) {
        // Free text search
        $results = $site
            ->index()
            ->listed()
            ->search($query, $options);

        $results = $results->paginate($paginate, ["method" => "query"]);
        $title = "Search results for ‘" . esc($query) . "’";
    } elseif ($geo == true) {
        // Geo located search
        $point = geo::point($geo);

        $results = page("places")
            ->grandChildren()
            ->children()
            ->filterBy("geo", "radius", [
                "lat" => $point->lat(),
                "lng" => $point->lng(),
                "radius" => 15,
            ]);

        $results = $results->paginate($paginate);
        $title = "Places near you";
        $query = esc($geo);
    } else {
        $results = null;
        $title = $page->title();
    }

    return compact("results", "title", "query");
};
