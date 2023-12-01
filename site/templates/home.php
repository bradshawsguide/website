<?php snippet("head"); ?>

<?php snippet("inquire", [
    "title" => "Search " . site()->title(),
    "background" => $page
        ->image()
        ->thumb("cover")
        ->url(),
]); ?>

<?php snippet(
    "collection",
    [
        "component" => "section",
        "display" => "grid",
        "items" => $pages->find("sections")->children(),
        "title" => "Routes & Tours",
    ],
    slots: true
); ?>
    <?php slot("header"); ?>
        <?php snippet("header", [
            "level" => 2,
            "title" => Html::a(page("routes")->url(), "Routes & Tours"),
            "subtitle" => "(In four sections), adapted to the railway system:",
            "modifiers" => ["index"],
        ]); ?>
    <?php endslot(); ?>
<?php endsnippet(); ?>

<?php snippet(
    "collection",
    [
        "component" => "feature",
        "display" => "grid",
        "items" => $page->feature()->toPages(),
        "title" => "Best Of The Guide",
    ],
    slots: true
); ?>
    <?php slot("header"); ?>
        <?= snippet("header", [
            "level" => 2,
            "title" => Html::a(page("places")->url(), "Places"),
            "subtitle" =>
                "With Maps, Plans of Towns And Pictorial Illustrations",
            "modifiers" => ["index"],
        ]) ?>
    <?php endslot(); ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
