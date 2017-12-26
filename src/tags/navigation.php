<?php

kirbytext::$tags['navigation'] = array(
    'html' => function ($tag) {
        if ($tag->attr('navigation') == 'children') {
            $items = $tag->page()->children();
        } else {
            $items = $tag->page()->siblings();
        }

        return pattern('scopes/navigation', [
            'items' => $items
        ], true);
    }
);
