<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'title' => $page->title()
  ]);

  pattern('common/section/featured', [
    'title' => html::a('/stations/', 'Stations'),
    'items' => page('stations')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);

  pattern('common/section/featured', [
    'title' => html::a('/routes/', 'Routes'),
    'items' => page('routes')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);

  pattern('common/section/featured', [
    'title' => html::a('/regions/', 'Regions'),
    'items' => page('regions')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);

  pattern('common/section/featured', [
    'title' => html::a('/companies/', 'Companies'),
    'items' => page('companies')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);
?>
</section>

<? snippet('foot') ?>
