<?php

kirby()->routes(array(
    array(
        'pattern' => 'robots.txt',
        'action'    => function () {
            return new Response('User-agent: *
Disallow: /kirby/
Disallow: /panel/

Sitemap: '.u('sitemap.xml'), 'txt');
        }
    )
));
