<?php

snippet("head", [
    "alternate" => $page->url() . ".geojson",
]);

if ($image = $page->image("cover.jpg")) {
    snippet("figure", [
        "image" => $image,
    ]);
}

snippet("header", [
    "parent" => Html::a($page->parent()->url(), $page->parent()->title()),
    "title" => $page->title(),
    "subtitle" => $page->subtitle(),
]);

snippet("page/content");

if (size($page->nearby())) {
    snippet("section/list", [
        "title" => "Places nearby",
        "modifiers" => ["offset"],
        "items" => $page->nearby(),
        "component" => "feature",
        "display" => "grid",
    ]);
}

snippet("foot");
