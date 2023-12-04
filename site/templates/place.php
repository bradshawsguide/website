<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson",
]); ?>

<?php if ($image = $page->image("cover.jpg")) {
    snippet("figure", compact("image"));
} ?>

<?php snippet("content"); ?>

<?php snippet("collection", [
    "title" => "Places nearby",
    "items" => $page->nearby(),
    "component" => "feature",
    "display" => "grid",
]); ?>

<?php snippet("foot"); ?>
