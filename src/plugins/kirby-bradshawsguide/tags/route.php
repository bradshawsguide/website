<?php

return [
    'html' => function ($tag) {
        if ($route = page('routes/'.$tag->value())) {
            return snippet('route', [
                'route' => $route
            ], true);
        }
    }
];
