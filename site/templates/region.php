<?php snippet("head"); ?>

<?php snippet("traverse"); ?>

<?php snippet("header", [
    "pretitle" => "A descriptive guide to",
    "title" => $page->title(),
    "modifiers" => ["index"],
]); ?>

<?php if ($page->text()->isNotEmpty()) {
    snippet("content");
} ?>

<?php if ($page->uid() != "channel-islands") {
    if (size($page->children())) {
        snippet("collection", [
            "title" => $page->listTitle(),
            "items" => $page->children(),
            "display" => "columns",
        ]);
    }
} ?>

<?php if (size($page->featured())) {
    snippet("collection", [
        "title" => "Featured places",
        "items" => $page->featured(),
        "component" => "feature",
        "display" => "grid",
    ]);
} ?>

<?php snippet("foot"); ?>
