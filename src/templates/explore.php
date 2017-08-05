<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/header', [
    'p' => $page
  ]);

  pattern('section/featured', [
    'title' => html::a('/stations/', 'Stations'),
    'items' => page('stations')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);

  pattern('section/featured', [
    'title' => html::a('/routes/', 'Routes'),
    'items' => page('routes')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);

  pattern('section/featured', [
    'title' => html::a('/regions/', 'Regions'),
    'items' => page('regions')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);

  pattern('section/featured', [
    'title' => html::a('/companies/', 'Companies'),
    'items' => page('companies')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);
?>
</article>

<? snippet('foot') ?>
