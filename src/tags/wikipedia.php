<?php

kirbytext::$tags['wikipedia'] = array(
    'html' => function ($tag) {
        $text = $tag->attr('wikipedia');
        $text = urldecode($text);
        $text = str_replace('_', ' ', $text);

        $a = brick('a');
        $a->attr('href', 'https://en.wikipedia.org/wiki/'.$tag->attr('wikipedia'));
        $a->html('&#8216;'.$text.'&#8217; on Wikipedia');
        return $a;
    }
);
