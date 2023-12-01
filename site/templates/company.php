<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson",
]); ?>

<?php snippet("header", [
    "parent" => Html::a($page->parent()->url(), $page->parent()->title()),
    "title" => $page->title(),
]); ?>

<?php snippet("page/content"); ?>

<?php snippet("section/list", [
    "title" => "Routes operated",
    "items" => $page->routes(),
    "component" => "route-item",
]); ?>

<?php snippet("map", [
    "url" => "{$page->url()}.geojson",
    "title" => "Network map",
]); ?>

<?php snippet("section/list", [
    "title" => "All stations",
    "items" => $page->stations(),
    "display" => "columns",
]); ?>

<?php snippet("section/text", [
    "title" => "Further reading",
    "text" => $page->links(),
]); ?>

<?php snippet("foot");
