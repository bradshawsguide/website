<?php

kirbytext::$tags['branch'] = array(
    'attr' => array(
        'title'
    ),
    'html' => function ($tag) {
        if ($tag->attr('branch') == 'start') {
            if ($tag->attr('title')) {
                $heading  = '<h3>'.$tag->attr('title').'</h3>';
            } else {
                $heading = null;
            }
            return '<section class="s-branch" markdown="1">'.$heading;
        } elseif ($tag->attr('branch') == 'end') {
            return '</section>';
        }
    }
);
