<?php

kirbytext::$tags['disused'] = array(
    'html' => function ($tag) {
        return '<a href="http://www.disused-stations.org.uk/'.$tag->attr('disused').'">Site record on Disused Stations</a>';
    }
);
