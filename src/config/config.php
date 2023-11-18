<?php

return [
    // Markdown
    'markdown' => [
        'extra' => true
    ],

    // Database
    'db' => [
        'type' => 'sqlite',
        'database' => __DIR__ . '/../content/site.db'
    ],

    // Routes
    'routes' => [
        [
            'pattern' => 'app.webmanifest',
            'action' => function () {
                $json = snippet('app/webmanifest', ['site' => site()], true);
                return new Response($json, 'application/manifest+json');
            }
        ],
        [
            'pattern' => 'map',
            'action' => function () {
                return snippet('app/map', [], true);
            }
        ],
        [
            'pattern' => 'robots.txt',
            'action' => function () {
                $txt = snippet('app/robots', [], true);
                return new Response($txt, 'txt');
            }
        ]
    ]
];
