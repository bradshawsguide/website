<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', [
    'p' => $page
  ]);

  pattern('section/featured', [
    'title' => 'Stations',
    'url' => '/stations/',
    'items' => page('stations')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);

  pattern('section/featured', [
    'title' => 'Routes',
    'url' => '/routes/',
    'items' => page('routes')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);

  pattern('section/featured', [
    'title' => 'Regions',
    'url' => '/regions/',
    'items' => page('regions')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);

  pattern('section/featured', [
    'title' => 'Companies',
    'url' => '/companies/',
    'items' => page('companies')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);
?>
</article>

<? snippet('foot') ?>
