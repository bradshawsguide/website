<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson",
]); ?>

<?php snippet("header", [
    "parent" => Html::a($page->parent()->url(), $page->parent()->title()),
    "title" => $page->title(),
    "subtitle" => $page->subtitle(),
]); ?>

<?php if ($page->routes()) {
    snippet("collection", [
        "title" => "Routes serving this station",
        "items" => $page->routes(),
        "component" => "route-traversal",
    ]);
} ?>

<?php snippet("map", [
    "url" =>
        $page->uri() .
        ".geojson" .
        $kirby
            ->request()
            ->url()
            ->params() .
        "&zoom=14",
    "title" => "Location of this station",
]); ?>

<?php if ($page->place()->isNotEmpty()) {
    snippet("collection", [
        "title" => "Places nearby",
        "items" => [$page->place()->toPage()],
        "component" => "feature",
        "display" => "grid",
    ]);
} ?>

<?php snippet("page/links"); ?>

<?php snippet("foot"); ?>
