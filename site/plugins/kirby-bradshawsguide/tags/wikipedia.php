<?php

return [
    "attr" => ["text"],
    "html" => function ($tag) {
        $name = $tag->value();
        $name = urldecode($name);
        $name = str_replace("_", " ", $name);

        $text = $tag->text() ? $tag->text() : $name;

        return Html::tag("a", $text . " on Wikipedia", [
            "href" => "https://en.wikipedia.org/wiki/" . $tag->value(),
        ]);
    },
];
