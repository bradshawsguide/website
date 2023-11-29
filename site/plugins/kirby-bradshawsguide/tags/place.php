<?php

return [
    "attr" => ["suffix"],
    "html" => function ($tag) {
        if ($place = page("places/" . $tag->value())) {
            return snippet(
                "place",
                [
                    "place" => $place,
                    "suffix" => $tag->suffix(),
                ],
                true
            );
        }
    },
];
