<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/header', [
    'p' => $page,
    'parent' => page('companies')
  ]);

  pattern('common/content', [
    'p' => $page
  ]);

  pattern('section/routes', [
    'title' => 'Routes operated',
    'items' => page('routes')->children()->filterBy('company', $page->uid())
  ]);

  pattern('section/featured', [
    'title' => 'Featured stations',
    'items' => page('stations')->children()->filterBy('company', '*=', $page->uid())->filter(function($page) {
      return $page->hasImages();
    })
  ]);

  pattern('section/stations', [
    'title' => 'Stations served',
    'items' => page('stations')->children()->filterBy('company', '*=', $page->uid())
  ]);

  pattern('common/traverse', [
    'p' => $page
  ]);
?>
</article>

<? snippet('foot') ?>
