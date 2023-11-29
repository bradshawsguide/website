<?php
// Test if $route == ?route query
$currentRoute = get("route");

// Flatten array so that branch stops appear on main route
$stops = array_flatten($route->stops()->yaml());

// Get key by finding the name of this (nearest) station in stops
$stopKey = array_search($page->id(), $stops);

if (array_key_exists($stopKey - 1, $stops)) {
    $prevID = $stops[$stopKey - 1];
    $prev = page($prevID);
};

if (array_key_exists($stopKey + 1, $stops)) {
    $nextID = $stops[$stopKey + 1];
    $next = page($nextID);
};
?>

<nav class="c-route-traversal" aria-labelledby="route-traversal-title"<?= e(
    $currentRoute == $route->uid(),
    " data-current"
) ?>>
    <?= snippet("title", [
        "title" => $title,
        "level" => $level ?? 3,
        "id" => "route-traversal-title",
    ]) ?>

    <dl>
        <dt><b-visually-hidden>Previous station</b-visually-hidden></dt>
        <dd><?= isset($prev)
            ? Html::a(
                $prev->url() . "?route=" . $route->uid(),
                [kti($prev->title()) . '<b-icon name="prev"/></b-icon>'],
                ["rel" => "prev"]
            )
            : Html::tag("i", "Terminus") ?></dd>
        <dt><b-visually-hidden>Next station</b-visually-hidden></dt>
        <dd><?= isset($next)
            ? Html::a(
                $next->url() . "?route=" . $route->uid(),
                [kti($next->title()) . '<b-icon name="next"/></b-icon>'],
                ["rel" => "next"]
            )
            : Html::tag("i", "Terminus") ?></dd>
    </dl>
</nav>
