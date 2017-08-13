<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('companies'),
    'title' => $page->title()
  ]);

  pattern('content');

  pattern('common/section/routes', [
    'title' => 'Routes operated',
    'items' => page('routes')->children()->filterBy('company', $page->uid())
  ]);

  pattern('common/section/featured', [
    'title' => 'Featured stations',
    'items' => page('stations')->children()->filterBy('company', '*=', $page->uid())->filter(function($page) {
      return $page->hasImages();
    })
  ]);

  pattern('common/section/stations', [
    'title' => 'Stations served',
    'items' => page('stations')->children()->filterBy('company', '*=', $page->uid())
  ]);

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
