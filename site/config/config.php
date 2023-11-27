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

    // Thumbs
    'thumbs' => [
        'aside' => ['width' => 150, 'height' => 200, 'crop' => 'center', 'quality' => 80],
        'cover' => ['width' => 320, 'height' => 180, 'crop' => 'center', 'quality' => 80],
        'feature' => ['width' => 480, 'height' => 270, 'crop' => 'center', 'quality' => 80],
        'map' => ['width' => 300, 'height' => 200, 'crop' => 'center', 'quality' => 80],
        'srcsets' => [
            'aside' => [
                '150w' => ['width' => 150, 'height' => 200, 'crop' => 'center', 'quality' => 80],
                '300w' => ['width' => 300, 'height' => 400, 'crop' => 'center', 'quality' => 80],
                '600w' => ['width' => 600, 'height' => 800, 'crop' => 'center', 'quality' => 80],
            ],
            'cover' => [
                '320w' => ['width' => 320, 'height' => 180, 'crop' => 'center', 'quality' => 80],
                '640w' => ['width' => 640, 'height' => 360, 'crop' => 'center', 'quality' => 80],
                '1280w' => ['width' => 1280, 'height' => 720, 'crop' => 'center', 'quality' => 80],
            ],
            'feature' => [
                '320w' => ['width' => 320, 'height' => 180, 'crop' => 'center', 'quality' => 80],
                '480w' => ['width' => 480, 'height' => 270, 'crop' => 'center', 'quality' => 80],
                '960w' => ['width' => 960, 'height' => 540, 'crop' => 'center', 'quality' => 80],
            ],
            'map' => [
                '300w' => ['width' => 300, 'height' => 200, 'crop' => 'center', 'quality' => 80],
                '600w' => ['width' => 600, 'height' => 400, 'crop' => 'center', 'quality' => 80],
                '1200w' => ['width' => 1200, 'height' => 800, 'crop' => 'center', 'quality' => 80],
            ],
        ],
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
