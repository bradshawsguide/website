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
    'routes' => [[
        'pattern' => 'app.webmanifest',
        'action' => function () {
            return tpl::load(kirby()->root('templates').'/app.webmanifest.php', [
                'site' => kirby()->site()
            ]);
        }
    ],[
        'pattern' => 'map',
        'action' => function () {
            return tpl::load(kirby()->root('templates').'/map.php', [], false);
        }
    ],[
        'pattern' => 'robots.txt',
        'action' => function () {
            return new Response('User-agent: *
Disallow: /www/kirby/
Sitemap: '.url('sitemap.xml'), 'txt');
        }
    ]]
];
