<?php

return [
    "html" => function ($tag) {
        $image = empty($tag->value()) ? $tag->parent()->image() : $tag->value();

        if ($image) {
            return snippet(
                "figure",
                [
                    "image" => $image,
                ],
                true
            );
        }
    },
];
