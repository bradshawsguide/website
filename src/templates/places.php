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

  foreach($countries as $country) {
    pattern('common/section/list', [
      'title' => html::a($country->url(), smartypants($country->title())),
      'items' => $country->children()
    ]);
  }

  pattern('common/section/featured', [
    'title' => html::a('/companies/', 'Companies'),
    'items' => page('companies')->children()->filter(function($page) {
      return $page->hasImages();
    })->limit(6)
  ]);
?>
</section>

<? snippet('foot') ?>
