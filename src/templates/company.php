<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  pattern('section/routes', [
    'title' => 'Routes operated',
    'items' => page('routes')->children()->filterBy('company', $page->uid())
  ]);

  $company = kirby()->request()->path()->last();
  pattern('section/stations', [
    'title' => 'Stations served',
    'items' => page('stations')->children()->filterBy('company', '*=', $company)
  ]);

  pattern('section/related', ['p' => $page]);

  pattern('page/footer', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
