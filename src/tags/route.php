<?php

kirbytext::$tags['route'] = array(
    'html' => function ($tag) {
        if ($route = page('routes/'.$tag->attr('route'))) {
            return pattern('common/route', [
                'route' => $route
            ], true);
        }
    }
);
