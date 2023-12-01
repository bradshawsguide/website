<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson",
]); ?>

<?php snippet("traverse"); ?>

<?php if ($page->stops()->isNotEmpty()) {
    snippet("map", [
        "url" => "{$page->url()}.geojson",
        "title" => "Map of this route",
    ]);
} ?>

<?php snippet("header", [
    "parent" => $page->operator(),
    "title" => $page->title(),
    "subtitle" => $page->subtitle()->isNotEmpty() ? $page->subtitle() : null,
]); ?>

<?php snippet("page/content", [
    "proseModifiers" => ["route"],
]); ?>

<?php if ($page->links()->isNotEmpty()) {
    snippet("section/text", [
        "title" => "Further reading",
        "text" => $page->links(),
    ]);
} ?>

<?php snippet("foot"); ?>
