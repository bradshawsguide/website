<?php

return [
    // Markdown
    'markdown' => [
        'extra' => true
    ],

    'smartypants' => true,

    // Database
    'db' => [
        'type' => 'sqlite',
        'database' => __DIR__ . '/../../content/site.db'
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
        ],
        [
            'pattern' => 'sitemap.xml',
            'action'  => function () {
                $pages = site()->index()->listed();
                $ignore = kirby()->option('sitemap.ignore', ['error']);
                $xml = snippet('app/sitemap', compact('pages', 'ignore'), true);
                return new Response($xml, 'application/xml');
            }
        ]
    ]
];
