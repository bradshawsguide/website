<?=

Html::figure(
    [
        Html::img($image->thumb($image->name())->url(), [
            "alt" => $image->alt(),
            "sizes" => $image->name() == "cover" ? "100vw" : false,
            "srcset" => $image->srcset($image->name()),
        ]),
    ],
    [kt($image->caption())],
    [
        "class" => "c-figure",
        "data-display" => $image->name(),
    ],
)

?>
