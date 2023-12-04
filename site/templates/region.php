<?php snippet("head"); ?>

<?php snippet("traverse"); ?>

<?php snippet(
    "content",
    [
        "pretitle" => "A descriptive guide to",
    ],
    slots: true
); ?>
    <?php if ($page->uid() != "channel-islands"): ?>
        <?php snippet("collection", [
            "title" => $page->listTitle(),
            "items" => $page->children(),
            "display" => "columns",
        ]); ?>
    <?php endif; ?>

    <?php snippet("collection", [
        "title" => "Featured places",
        "items" => $page->featured(),
        "component" => "feature",
        "display" => "grid",
    ]); ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
