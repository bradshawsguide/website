<?php

return [
    "attr" => ["title"],
    "html" => function ($tag) {
        $id = Str::slug($tag->title());
        if ($tag->value() == "start") {
            if ($tag->title()) {
                $heading = "<h3>" . $tag->title() . "</h3>";
            } else {
                $heading = null;
            }
            return '<section class="s-branch" id="' .
                $id .
                '" markdown="1">' .
                $heading;
        } elseif ($tag->value() == "end") {
            return "</section>";
        }
    },
];
