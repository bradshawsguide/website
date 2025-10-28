<?php

$section = $page->section();
$view = get("view") ?: "list";

// Redirect
if (get("view") == null) {
    go("{$page->uri()}/{$section}?view={$view}");
}
?>

<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson/section:{$section}",
]); ?>

<?php snippet(
    "content",
    [
        "content" => collection("sections")->findBy("uid", $section)->text(),
        "editable" => false,
    ],
    slots: true,
); ?>
    <?php slot("beforeContent"); ?>
        <?php snippet("tablist", [
            "title" => "Sections",
            "tabs" => collection("sections"),
            "uid" => $section,
            "view" => $view,
        ]); ?>
    <?php endslot(); ?>

    <?php if (size($routes)): ?>
        <?php slot(); ?>
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
                <?php snippet("collection", [
                    "component" => "feature",
                    "display" => "grid",
                    "items" => collection("sections")
                        ->findBy("uid", $section)
                        ->feature()
                        ->toPages(),
                    "title" => "Featured routes and tours",
                ]); ?>

                <?php foreach ($companies as $company): ?>
                    <?php snippet("collection", [
                        "title" => Html::a($company->url(), $company->title()),
                        "items" => $company
                            ->routes()
                            ->filterBy("section", $section)
                            ->sortBy("title", "asc"),
                    ]); ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endslot(); ?>
    <?php endif; ?>
<?php endsnippet(); ?>

<?php snippet("foot");
