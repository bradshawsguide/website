<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson",
]); ?>

<?php if ($image = $page->image("cover.jpg")) {
    snippet("figure", compact("image"));
} ?>

<?php snippet("content", slots: true); ?>
    <?php snippet("collection", [
        "title" => "Places nearby",
        "items" => $page->nearby(),
        "component" => "feature",
        "display" => "grid",
    ]); ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
