<?php

kirbytext::$tags['navigation'] = array(
    'html' => function ($tag) {
        if ($tag->attr('navigation') == 'children') {
            $items = $tag->page()->children();
        } else {
            $items = $tag->page()->siblings();
        }

        if (count($items)) {
            return pattern('scopes/navigation', [
                'items' => $items
            ], true);
        }
    }
);
