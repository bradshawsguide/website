<?php snippet("head"); ?>

<?php snippet("inquire", [
    "title" => "Search " . site()->title(),
    "background" => $page
        ->image()
        ->thumb("cover")
        ->url(),
]); ?>

<?php snippet("header", [
    "level" => 2,
    "title" => Html::a(page("routes")->url(), "Routes & Tours"),
    "subtitle" => "(In four sections), adapted to the railway system:",
    "modifiers" => ["index"],
]); ?>

<?php snippet("page/content"); ?>

<?php snippet("section/places", [
    "modifiers" => ["offset"],
]); ?>

<?php snippet("foot"); ?>
