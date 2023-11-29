<?php

snippet("head", [
    "alternate" => $page->url() . ".geojson",
]);

snippet("header", [
    "parent" => Html::a($page->parent()->url(), $page->parent()->title()),
    "title" => $page->title(),
]);

snippet("page/content");

snippet("section/list", [
    "title" => "Routes operated",
    "items" => $page->routes(),
    "component" => "route-item",
]);

snippet("map", [
    "url" => $page->uri() . ".geojson",
    "title" => "Network map",
    "modifiers" => ["cover"],
]);

snippet("section/list", [
    "title" => "All stations",
    "items" => $page->stations(),
    "display" => "columns",
]);

snippet("section/text", [
    "title" => "Further reading",
    "text" => $page->links(),
]);

snippet("foot");
