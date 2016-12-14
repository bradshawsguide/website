<?

// Direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

// Kirby license key
c::set('license', '');

// URL setup
c::set('url', '/');

// Whoops error reporting
c::set('whoops', false);

// Routes
c::set('routes', array(
  array(
    'pattern' => 'manifest.json',
    'action'  => function() {
      return site()->visit('manifest');
    }
  )
));

// Rewrite URLs
c::set('rewrite', true);

// Force SSL
c::set('ssl', false);

// Debug
c::set('debug', true);

// Troubleshooting
c::set('troubleshoot', true);

// Tiny URL Setup
c::set('tinyurl.enabled', true);
c::set('tinyurl.folder', 'x');
c::set('tinyurl.url', 'http://bradshaws.dev');

// Cache
c::set('cache', false);
c::set('cache.autoupdate', true);
c::set('cache.data', true);
c::set('cache.html', true);
c::set('cache.ignore', array('search', 'sitemap'));

// Patterns
c::set('patterns.preview.css', 'assets/app.css');
c::set('patterns.preview.js', 'assets/app.js');

// Content file extension
c::set('content.file.extension', 'md');

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
c::set('typography.class.caps', 'u-c2sc');
c::set('typography.class.fraction.nominator', 'u-frac-nom');
c::set('typography.class.fraction.denominator', 'u-frac-denom');
