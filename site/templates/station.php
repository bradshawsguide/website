<?php

snippet("head", [
    "alternate" => $page->url() . ".geojson",
]);

snippet("header", [
    "parent" => Html::a($page->parent()->url(), $page->parent()->title()),
    "title" => $page->title(),
    "subtitle" => $page->subtitle(),
]);

if ($page->routes()) {
    snippet("section/route-traversal", [
        "title" => "Routes serving this station",
        "level" => 2,
        "routes" => $page->routes(),
    ]);
}

snippet("map", [
    "url" =>
        $page->uri() .
        ".geojson/" .
        $kirby
            ->request()
            ->url()
            ->params() .
        "&zoom=14",
    "title" => "Location of this station",
    "modifiers" => ["cover"],
]);

if ($page->place()->isNotEmpty()) {
    snippet("section/list", [
        "title" => "Places nearby",
        "modifiers" => ["offset"],
        "items" => [$page->place()->toPage()],
        "component" => "feature",
        "display" => "grid",
    ]);
}

snippet("section/text", [
    "title" => "Further reading",
    "text" => $page->links(),
]);

snippet("foot");
