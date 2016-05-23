<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/navigation', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  pattern('section/related');

  $stations = $pages->find('stations')->children()->filterBy('region', $page->title());
  if($stations->count()) {
    pattern('section/stations', [
      'title' => 'Stations in the county',
      'stations' => $stations
    ]);
  }

  pattern('common/shorturl');

  pattern('common/traverse', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
