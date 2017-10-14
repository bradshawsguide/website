<?php

kirbytext::$tags['station'] = array(
    'html' => function ($tag) {
        if ($station = page('stations/'.$tag->attr('station'))) {
            return pattern('common/station', [
                'station' => $station
            ], true);
        }
    }
);
