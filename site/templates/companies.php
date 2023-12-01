<?php snippet("head"); ?>

<?php snippet("header", [
    "title" => $page->title(),
    "modifiers" => ["index"],
]); ?>

<?php foreach (collection("companies") as $letter => $items) {
    snippet("index", compact("items", "letter"));
} ?>

<?php snippet("foot"); ?>

