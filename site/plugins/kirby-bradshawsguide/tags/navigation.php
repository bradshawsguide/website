<?php

return [
    "html" => function ($tag) {
        if ($tag->value() == "children") {
            $items = $tag->parent()->children();
        } else {
            $items = $tag->parent()->siblings();
        }

        if ($items->count()) {
            return snippet(
                "scope/navigation",
                [
                    "items" => $items,
                ],
                true,
            );
        }
    },
];
