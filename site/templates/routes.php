<?php

// Redirect
$view = get("view") == true ? get("view") : "list";
$section = $pages
    ->find("sections")
    ->children()
    ->findBy("uid", param("section"));

if (param("section") == null) {
    go($page->uri() . "/section:1?view=" . $view);
}

if (get("view") == null) {
    go($page->uri() . "/section:" . param("section") . "?view=list");
}
?>

<?php snippet("head", [
    "alternate" => $page->url() . ".geojson" . "/section:" . param("section"),
]); ?>

<?php snippet("header", [
    "title" => $page->title(),
    "modifiers" => ["index"],
]); ?>

<?php snippet("tablist", [
    "title" => "Sections",
    "tabs" => $site->find("sections")->children(),
    "param" => "section",
    "view" => get("view"),
]); ?>

<?php snippet("page/content", [
    "content" => $section->text(),
    "proseModifiers" => ["centered"],
    "editable" => false,
]); ?>

<?php if (size($routes)) {
    snippet("switch", [
        "title" => "Change view",
        "queryName" => "view",
        "switches" => [
            [
                "label" => "List view",
                "uid" => "list",
            ],
            [
                "label" => "Map view",
                "uid" => "map",
            ],
        ],
    ]);

    if (get("view") == "map") {
        snippet("map", [
            "url" =>
                $page->uri() .
                ".geojson" .
                $kirby
                    ->request()
                    ->url()
                    ->params(),
            "title" => "Routes plotted on a map",
        ]);
    } else {
        snippet("collection", [
            "title" => "Featured routes",
            "items" => $featured->filterBy("section", param("section")),
            "component" => "feature",
            "display" => "grid",
        ]);

        foreach ($companies as $company) {
            $items = $company->routes()->filterBy("section", param("section"));

            if (size($items)) {
                snippet("collection", [
                    "title" => Html::a($company->url(), $company->title()),
                    "items" => $items,
                    "component" => "route-item",
                ]);
            }
        }
    }
} ?>

<?php snippet("foot");
