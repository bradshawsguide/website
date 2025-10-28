<?php snippet("head"); ?>

<?php snippet(
    "content",
    [
        "content" => !size($results) ? $page->text() : "",
        "editable" => false,
        "title" => $title,
    ],
    slots: true,
); ?>
    <?php if (size($results)): ?>
        <?php snippet("collection", [
            "title" => "{$results->pagination()->total()} pages found",
            "items" => $results,
            "component" => "result",
        ]); ?>
        <?php if ($results->pagination()->hasPages()): ?>
            <?php snippet("pagination", [
                "pagination" => $results->pagination(),
            ]); ?>
        <?php endif; ?>
    <?php else: ?>
        <?php snippet("inquire", [
            "title" => "Search again",
            "background" => null,
        ]); ?>
    <?php endif; ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
