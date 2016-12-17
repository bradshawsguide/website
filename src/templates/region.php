<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/navigation', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  pattern('section/related');

  pattern('section/stations', [
    'title' => 'Stations in the county',
    'items' => page('stations')->children()->filterBy('region', $page->uid())
  ]);

  pattern('page/footer', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
