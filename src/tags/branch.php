<?php

kirbytext::$tags['branch'] = array(
    'html' => function ($tag) {
        if ($tag->attr('branch') == 'start') {
            return '<section class="c-branch" markdown="1">';
        } elseif ($tag->attr('branch') == 'end') {
            return '</section>';
        }
    }
);
