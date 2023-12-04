<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson",
]); ?>

<?php snippet("content", slots: true); ?>
    <?php snippet("collection", [
        "title" => "Routes operated",
        "items" => $page->routes(),
        "component" => "route-item",
    ]); ?>

    <?php snippet("map", [
        "url" => "{$page->url()}.geojson",
        "title" => "Network map",
    ]); ?>

    <?php snippet("collection", [
        "title" => "All stations",
        "items" => $page->stations(),
        "display" => "columns",
    ]); ?>

    <?php snippet("links"); ?>
<?php endsnippet(); ?>

<?php snippet("foot");
