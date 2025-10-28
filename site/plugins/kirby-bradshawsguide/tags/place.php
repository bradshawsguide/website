<?php

return [
    "attr" => ["suffix"],
    "html" => function ($tag) {
        if ($item = page("places/" . $tag->value())) {
            return snippet(
                "feature",
                [
                    "item" => $item,
                    "suffix" => $tag->suffix(),
                ],
                true,
            );
        }
    },
];
