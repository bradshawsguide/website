<?php

kirbytext::$tags['branch'] = array(
    'attr' => array(
        'title'
    ),
    'html' => function ($tag) {
        $id = str::slug($tag->attr('title'));
        if ($tag->attr('branch') == 'start') {
            if ($tag->attr('title')) {
                $heading  = '<h3>'.$tag->attr('title').'</h3>';
            } else {
                $heading = null;
            }
            return '<section class="s-branch" id="'.$id.'" markdown="1">'.$heading;
        } elseif ($tag->attr('branch') == 'end') {
            return '</section>';
        }
    }
);
