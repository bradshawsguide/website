<?php

kirbytext::$tags['wikipedia'] = array(
    'html' => function ($tag) {
        $a = brick('a');
        $a->attr('href', 'https://en.wikipedia.org/wiki/'.$tag->attr('wikipedia'));
        $a->html($tag->page()->currentTitle().' on Wikipedia');
        return $a;
    }
);
