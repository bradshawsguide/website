<article class="c-route-item">
    <?php
    snippet("title", [
        "title" => Html::a($item->url(), $item->shortTitle()),
        "level" => $level ?? 3,
        "class" => "c-route-item__label",
    ]);

    if ($item->subtitle()->isNotEmpty()) {
        echo Html::tag(
            "p",
            [$item->subtitle()],
            [
                "class" => "c-route-item__desc",
            ]
        );
    };
    ?>
</article>
