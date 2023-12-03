<?php

// Redirect
$section = param("section");
$view = get("view") ?: "list";

if ($section == null || get("view") == null) {
    go("{$page->uri()}/section:1?view={$view}");
}
?>

<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson/section:{$section}",
]); ?>

<?php snippet("header", [
    "title" => $page->title(),
    "modifiers" => ["index"],
]); ?>

<?php snippet("tablist", [
    "title" => "Sections",
    "tabs" => collection("sections"),
    "param" => "section",
    "view" => $view,
]); ?>

<?php snippet("page/content", [
    "content" => collection("sections")
        ->findBy("uid", $section)
        ->text(),
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
    if ($view == "map") {
        snippet("map", [
            "url" => "{$page->uri()}.geojson/{$kirby->request()->url()->params()}",
            "title" => "Routes plotted on a map",
        ]);
    } else {
        snippet("collection", [
            "title" => "Featured routes",
            "items" => $featured->filterBy("section", $section),
            "component" => "feature",
            "display" => "grid",
        ]);
        foreach ($companies as $company) {
            $items = $company->routes()->filterBy("section", $section);
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
