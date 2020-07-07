<?php

// Direct access protection
if (!defined('KIRBY')) {
    die('Direct access is not allowed');
}

// Debugging
c::set('debug', false);
c::set('whoops', false);

// URLs
c::set('url', 'https://beta.bradshaws.guide');
c::set('rewrite', true);
c::set('ssl', true);

// Tiny URL Setup
c::set('tinyurl.enabled', true);
c::set('tinyurl.folder', 'x');
c::set('tinyurl.url', 'https://beta.bradshaws.guide');

// Cache
c::set('cache', true);
c::set('cache.autoupdate', true);
c::set('cache.data', true);
c::set('cache.html', true);
c::set('cache.ignore', array('search', 'sitemap'));

// Sub-resource integrity
c::set('plugin.kirby-sri', false); // Breaks on Mythic Beasts server

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

// Disable HTML minification
c::set('MinifyHTML', true);

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
    )
));
