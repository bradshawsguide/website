<?php snippet("head"); ?>

<?php snippet("header", [
    "title" => "Stations A-Z",
    "modifiers" => ["index"],
]); ?>

<?php foreach (collection("stations") as $letter => $items) {
    snippet("index", [
        "items" => $items,
        "letter" => $letter,
        "listDisplay" => "columns",
    ]);
} ?>

<?php snippet("foot"); ?>
