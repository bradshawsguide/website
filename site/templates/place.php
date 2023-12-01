<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson",
]); ?>

<?php if ($image = $page->image("cover.jpg")) {
    snippet("figure", compact("image"));
} ?>

<?php snippet("header", [
    "parent" => Html::a($page->parent()->url(), $page->parent()->title()),
    "title" => $page->title(),
    "subtitle" => $page->subtitle(),
]); ?>

<?php snippet("page/content"); ?>

<?php if (size($page->nearby())) {
    snippet("section/list", [
        "title" => "Places nearby",
        "modifiers" => ["offset"],
        "items" => $page->nearby(),
        "component" => "feature",
        "display" => "grid",
    ]);
} ?>

<?php snippet("foot"); ?>
