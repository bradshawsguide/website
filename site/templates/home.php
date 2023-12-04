<?php snippet("head"); ?>

<?php snippet("inquire", [
    "title" => "Search " . site()->title(),
    "background" => $page
        ->image()
        ->thumb("cover")
        ->url(),
]); ?>

<?php snippet(
    "content",
    [
        "level" => 2,
        "content" => "",
        "title" => Html::a(page("routes")->url(), "Routes & Tours"),
        "subtitle" => "(In four sections), adapted to the railway system:",
    ],
    slots: true
); ?>
    <?php snippet("collection", [
        "component" => "section",
        "display" => "grid",
        "items" => $pages->find("sections")->children(),
    ]); ?>

    <?php snippet("collection", [
        "component" => "feature",
        "display" => "grid",
        "items" => $page->feature()->toPages(),
        "title" => "Best Of The Guide",
    ]); ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
