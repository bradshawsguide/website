<?php snippet("head"); ?>

<?php snippet("header", [
    "pretitle" => "A descriptive guide to places in",
    "title" => "Great Britain & Ireland",
    "modifiers" => ["index"],
]); ?>

<?php foreach (page("places")->children() as $country) {
    snippet("section/list", [
        "title" => Html::a($country->url(), kti($country->title())),
        "items" => $country->children(),
        "display" => "columns",
    ]);
} ?>

<?php snippet("foot"); ?>
