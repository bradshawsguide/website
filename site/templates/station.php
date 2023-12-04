<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson",
]); ?>

<?php snippet("content", slots: true); ?>
    <?php if ($page->routes()) {
        snippet("collection", [
            "title" => "Routes serving this station",
            "items" => $page->routes(),
            "component" => "route-traversal",
        ]);
    } ?>

    <?php snippet("map", [
        "url" =>
            $page->uri() .
            ".geojson" .
            $kirby
                ->request()
                ->url()
                ->params() .
            "&zoom=14",
        "title" => "Location of this station",
    ]); ?>

    <?php snippet("links"); ?>

    <?php if ($page->place()->isNotEmpty()) {
        snippet("collection", [
            "title" => "Places nearby",
            "items" => [$page->place()->toPage()],
            "component" => "feature",
            "display" => "grid",
        ]);
    } ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
