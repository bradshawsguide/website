<?php snippet("head"); ?>

<?php snippet("header", [
    "title" => $page->title(),
    "modifiers" => ["index"],
]); ?>

<?php foreach (collection("companies") as $letter => $items) {
    snippet("collection", [
        "id" => $letter,
        "items" => $items,
        "title" => Str::upper($letter),
        "display" => "index",
    ]);
} ?>

<?php snippet("foot"); ?>

