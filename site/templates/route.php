<?php snippet("head", [
    "alternate" => "{$page->url()}.geojson",
]); ?>

<?php snippet("traverse"); ?>

<?php if ($page->stops()->isNotEmpty()) {
    snippet("map", [
        "url" => "{$page->url()}.geojson",
        "title" => "Map of this route",
    ]);
} ?>

<?php snippet("content", slots: true); ?>
    <?php if ($page->links()->isNotEmpty()) {
        snippet("links");
    } ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
