<?php

kirbytext::$tags['place'] = array(
    'attr' => array(
        'branch'
    ),
    'html' => function ($tag) {
        if ($place = page('places/'.$tag->attr('place'))) {
            return pattern('common/place', [
                'place' => $place,
                'modifier' => $tag->attr('branch') ? 'branch' : ''
            ], true);
        }
    }
);
