<?php

kirbytext::$tags['trainline'] = array(
    'html' => function ($tag) {
        $a = brick('a');
        $a->attr('href', 'https://www.thetrainline.com/stations/'.$tag->attr('trainline'));
        $a->html($tag->page()->title().' station on the Trainline');
        return $a;
    }
);
