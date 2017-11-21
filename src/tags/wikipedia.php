<?php

kirbytext::$tags['wikipedia'] = array(
    'attr' => array(
        'text'
    ),
    'html' => function ($tag) {
        $text = $tag->attr('text', $tag->page()->currentTitle());
        $a = brick('a');
        $a->attr('href', 'https://en.wikipedia.org/wiki/'.$tag->attr('wikipedia'));
        $a->html($text.' on Wikipedia');
        return $a;
    }
);
