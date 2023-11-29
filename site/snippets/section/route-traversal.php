<article class="<?= classList("c-section", $modifiers ?? null) ?>">
    <?=
    snippet("title", [
        "title" => $title,
        "level" => $level ?? 2,
        "class" => "c-section__title",
    ]);

    foreach ($routes as $route) {
        snippet("route-traversal", [
            "title" => Html::a($route->url(), kti($route->shortTitle())),
            "level" => $level + 1,
            "route" => $route,
        ]);
    }
    ?>
</article>
