<? snippet('head') ?>

<article class="c-page">
<?
  $company = kirby()->request()->path()->last();

  pattern('page/header', [
    'p' => $page
  ]);

  pattern('page/content', [
    'p' => $page
  ]);

  pattern('section/routes', [
    'title' => 'Routes operated',
    'items' => page('routes')->children()->filterBy('company', $page->uid())
  ]);

  pattern('section/featured', [
    'title' => 'Featured stations',
    'items' => page('stations')->children()->filterBy('company', '*=', $company)->filter(function($page) {
      return $page->hasImages();
    })
  ]);

  pattern('section/stations', [
    'title' => 'Stations served',
    'items' => page('stations')->children()->filterBy('company', '*=', $company)
  ]);

  pattern('page/footer', [
    'p' => $page
  ]);
?>
</article>

<? snippet('foot') ?>
