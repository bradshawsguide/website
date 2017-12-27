<?php

kirbytext::$tags['place'] = array(
    'attr' => array(
        'suffix'
    ),
    'html' => function ($tag) {
        if ($place = page('places/'.$tag->attr('place'))) {
            return pattern('common/place', [
                'place' => $place,
                'suffix' => $tag->attr('suffix')
            ], true);
        }
    }
);
