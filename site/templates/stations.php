<?php snippet("head"); ?>

<?php snippet("header", [
    "title" => "Stations A-Z",
    "modifiers" => ["index"],
]); ?>

<?php foreach (collection("stations") as $letter => $items) {
    snippet("collection", [
        "id" => $letter,
        "items" => $items,
        "title" => Str::upper($letter),
        "display" => "index columns",
    ]);
} ?>

<?php snippet("foot"); ?>
