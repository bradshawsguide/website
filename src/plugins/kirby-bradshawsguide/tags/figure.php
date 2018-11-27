<?php

return [
    'html' => function ($tag) {
        $image = (empty($tag->value())) ? $tag->parent()->image() : $tag->value();
        return snippet('figure/image', [
            'image' => $image
        ], true);
    }
];
