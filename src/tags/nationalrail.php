<?php

kirbytext::$tags['nationalrail'] = array(
    'html' => function ($tag) {
        $a = brick('a');
        $a->attr('href', 'http://www.nationalrail.co.uk/stations/'.$tag->attr('nationalrail').'/details.html');
        $a->html($tag->page()->title().' ('.$tag->attr('nationalrail').') on National Rail Enquiries');
        return $a;
    }
);
