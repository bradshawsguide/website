<?php

snippet("head", [
    "alternate" => $page->url() . ".geojson",
]);

snippet("traverse");

if ($page->stops()->isNotEmpty()) {
    snippet("map", [
        "url" => $page->uri() . ".geojson",
        "title" => "Map of this route",
        "modifiers" => ["cover"],
    ]);
}

snippet("header", [
    "parent" => $page->operator(),
    "title" => $page->title(),
    "subtitle" => $page->subtitle()->isNotEmpty() ? $page->subtitle() : null,
]);

snippet("page/content", [
    "proseModifiers" => ["route"],
]);

if ($page->links()->isNotEmpty()) {
    snippet("section/text", [
        "title" => "Further reading",
        "text" => $page->links(),
    ]);
}

snippet("foot");
