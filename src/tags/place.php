<?php

kirbytext::$tags['place'] = array(
    'html' => function ($tag) {
        if ($place = page('places/'.$tag->attr('place'))) {
            return pattern('common/place', [
                'place' => $place
            ], true);
        }
    }
);
