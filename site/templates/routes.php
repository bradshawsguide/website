<?php

// Redirect
$section = param("section");
$view = get("view") ?: "list";

if ($section == null || get("view") == null) {
    go("{$page->uri()}/section:1?view={$view}");
}
?>

<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson/section:{$section}",
]); ?>

<?php snippet(
    "content",
    [
        "content" => collection("sections")
            ->findBy("uid", $section)
            ->text(),
        "editable" => false,
    ],
    slots: true
); ?>
    <?php snippet("tablist", [
        "title" => "Sections",
        "tabs" => collection("sections"),
        "param" => "section",
        "view" => $view,
    ]); ?>

    <?php if (size($routes)): ?>
        <?php snippet("switch", [
            "title" => "Change view",
            "queryName" => "view",
            "switches" => [
                [
                    "label" => "List view",
                    "uid" => "list",
                ],
                [
                    "label" => "Map view",
                    "uid" => "map",
                ],
            ],
        ]); ?>

        <?php if ($view == "map"): ?>
            <?php snippet("map", [
                "url" => "{$page->uri()}.geojson/{$kirby->request()->url()->params()}",
                "title" => "Routes plotted on a map",
            ]); ?>
        <?php else: ?>
            <?php
            $items = $featured->filterBy("section", $section);
            if (size($items)): ?>
                <?php snippet("collection", [
                    "title" => "Featured routes",
                    "items" => $items,
                    "component" => "feature",
                    "display" => "grid",
                ]); ?>
            <?php endif;
            ?>

            <?php foreach ($companies as $company): ?>
                <?php
                $items = $company->routes()->filterBy("section", $section);
                if (size($items)): ?>
                    <?php snippet("collection", [
                        "title" => Html::a($company->url(), $company->title()),
                        "items" => $items,
                        "component" => "route-item",
                    ]); ?>
                <?php endif;
                ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endsnippet(); ?>

<?php snippet("foot");
