<?php

// Direct access protection
if (!defined('KIRBY')) {
    die('Direct access is not allowed');
}

// Kirby license key
c::set('license', '');

// Database setup
c::set('db.type', 'sqlite');
c::set('db.database', kirby()->roots()->site().DS.'data/app.db');

// URL setup
c::set('url', 'https://bradshaws.test');

// Routes
c::set('routes', array(
    array(
        'pattern' => 'app.webmanifest',
        'action' => function () {
            tpl::load(kirby()->roots()->templates().DS.'app.webmanifest.php', [
                'site' => kirby()->site()
            ], false);
        }
    ),
    array(
        'pattern' => 'map',
        'action' => function () {
            tpl::load(kirby()->roots()->templates().DS.'map.php', null, false);
        }
    ),
    array(
        'pattern' => 'robots.txt',
        'action' => function () {
            return new Response('User-agent: *
Disallow: /www/kirby/
Sitemap: '.url('sitemap.xml'), 'txt');
        }
    ),
    array(
        'pattern' => 'stations/(:any)',
        'method' => 'GET',
        'action' => function ($uid) {
            $db = new Database(array(
                'type'     => c::get('db.type'),
                'database' => c::get('db.database')
            ));
            $stations = $db->table('stations');
            $station = $stations->where('uid', '=', $uid)->first();

            if (!$station) {
                return site()->errorPage();
            } else {
                tpl::load(kirby()->roots()->templates().DS.'station.php', [
                    'site' => kirby()->site(),
                    'page' => $station
                ], false);
            }
        }
    ),
));

// Rewrite URLs
c::set('rewrite', true);

// Force SSL
c::set('ssl', false);

// Debugging
c::set('debug', true);

// Troubleshooting
c::set('troubleshoot', true);

// Whoops error reporting
c::set('whoops', false);

// Disable HTML minification
c::set('MinifyHTML', true);

// Tiny URL Setup
c::set('tinyurl.enabled', true);
c::set('tinyurl.folder', 'x');
c::set('tinyurl.url', 'https://bradshaws.test');

// Cache
c::set('cache', false);
c::set('cache.autoupdate', true);
c::set('cache.data', true);
c::set('cache.html', true);
c::set('cache.ignore', array('search', 'sitemap'));

// Patterns
c::set('patterns.preview.css', 'assets/app.css');
c::set('patterns.preview.js', 'assets/app.js');

// Markdown options
c::set('markdown.extra', true);

// Typography
c::set('typography.debug', false);
c::set('typography.dashes.style', 'em');
c::set('typography.hyphenation', false);
c::set('typography.ordinal.suffix', false);
c::set('typography.space.collapse', false);
c::set('typography.style.quotes.initial', false);
c::set('typography.style.punctuation.hanging', false);
c::set('typography.class.caps', 'c2sc');
c::set('typography.class.fraction.nominator', 'frac-nom');
c::set('typography.class.fraction.denominator', 'frac-denom');
