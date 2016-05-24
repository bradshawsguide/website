<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  pattern('section/routes', [
    'title' => 'Routes operated',
    'items' => page('routes')->children()->filterBy('company', $page->uid())
  ]);

  pattern('section/stations', [
    'title' => 'Stations served',
    'items' => page('stations')->children()->filterBy('company', '*=', $page->uri())
  ]);

  pattern('section/related', ['p' => $page]);

  pattern('common/shorturl', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
