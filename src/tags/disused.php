<?php

kirbytext::$tags['disused'] = array(
    'html' => function ($tag) {
        $a = brick('a');
        $a->attr('href', 'http://www.disused-stations.org.uk/'.$tag->attr('disused'));
        $a->html('Site record on Disused Stations');
        return $a;
    }
);
