<?php

kirbytext::$tags['distances'] = array(
    'attr' => [
        'title'
    ],
    'html' => function ($tag) {
        return pattern('scopes/distances', [
            'title' => $tag->attr('title', 'Distances of Places from the Station'),
            'distances' => $tag->page()->distances()->yaml()
        ], true);
    }
);
