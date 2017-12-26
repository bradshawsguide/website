<?php

kirbytext::$tags['disused'] = array(
    'html' => function ($tag) {
        $slug = $tag->attr('disused').'/';
        $slug = str_replace('.shtml/', '.shtml', $slug);

        $a = brick('a');
        $a->attr('href', 'http://www.disused-stations.org.uk/'.$slug);
        $a->html('Site record on Disused Stations');
        return $a;
    }
);
