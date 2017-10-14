<?php

kirbytext::$tags['nationalrail'] = array(
    'html' => function ($tag) {
        return '<a href="http://www.nationalrail.co.uk/stations/'.$tag->attr('nationalrail').'/details.html' . '">'.$tag->page()->currentTitle().' ('.$tag->attr('nationalrail').') on National Rail Enquiries</a>';
    }
);
