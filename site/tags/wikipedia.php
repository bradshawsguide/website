<?php

kirbytext::$tags['wikipedia'] = array(
    'attr' => array(
        'text'
    ),
    'html' => function($tag) {
        $url     = 'http://wikipedia.org/wiki';
        $article = $tag->attr('wikipedia');

        // build the final url
        $url = 'http://en.wikipedia.org/w/index.php?search='.urlencode($article);

        // build the link tag
        return '<a href="'.$url.'">'.$article.' on Wikipedia</a>';
    }
);
