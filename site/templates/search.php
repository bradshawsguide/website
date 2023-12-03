<?php snippet("head"); ?>

<?php snippet("header", compact("title")); ?>

<?php if (size($results)) {
    snippet("collection", [
        "title" => "{$results->pagination()->total()} pages found",
        "items" => $results,
        "component" => "result",
    ]);

    if ($results->pagination()->hasPages()) {
        snippet("pagination", [
            "pagination" => $results->pagination(),
        ]);
    }
} else {
    snippet("content", [
        "editable" => false,
    ]);
    snippet("inquire", [
        "title" => "Search again",
        "background" => null,
    ]);
} ?>

<?php snippet("foot"); ?>
