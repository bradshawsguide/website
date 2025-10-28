<?php snippet("head"); ?>

<?php snippet(
    "content",
    [
        "pretitle" => "A descriptive guide to places in",
        "title" => "Great Britain & Ireland",
    ],
    slots: true,
); ?>
    <?php foreach (page("places")->children() as $country): ?>
        <?php snippet("collection", [
            "title" => Html::a($country->url(), kti($country->title())),
            "items" => $country->children(),
            "display" => "columns",
        ]); ?>
    <?php endforeach; ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
