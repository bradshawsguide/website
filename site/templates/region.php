<?php snippet("head"); ?>

<?php snippet("traverse"); ?>

<?php snippet("header", [
    "pretitle" => "A descriptive guide to",
    "title" => $page->title(),
    "modifiers" => ["index"],
]); ?>

<?php if ($page->text()->isNotEmpty()) {
    snippet("page/content", [
        "proseModifiers" => ["centered"],
    ]);
} ?>

<?php if ($page->uid() != "channel-islands") {
    if (size($page->children())) {
        snippet("section/list", [
            "title" => $page->listTitle(),
            "items" => $page->children(),
            "display" => "columns",
        ]);
    }
} ?>

<?php if (size($page->featured())) {
    snippet("section/list", [
        "title" => "Featured places",
        "modifiers" => ["offset"],
        "items" => $page->featured(),
        "component" => "feature",
        "display" => "grid",
    ]);
} ?>

<?php snippet("foot"); ?>
