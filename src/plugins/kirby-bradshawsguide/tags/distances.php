<?php

return [
    'attr' => [
        'title'
    ],
    'html' => function ($tag) {
        $fieldname = empty($tag->value()) ? 'distances' : $tag->value();

        return snippet('scope/distances', [
            'title' => $tag->title(),
            'distances' => $tag->parent()->$fieldname()->yaml()
        ], true);
    }
];
