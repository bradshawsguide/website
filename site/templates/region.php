<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb');

  pattern('page/header', ['p' => $page]);

  pattern('page/navigation', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  pattern('section/related');

  $region = $page->title();
  $stations = $pages->find('stations')->children()->filterBy('region', $region);
  if($stations->count()) {
    pattern('section/stations', array(
      'stations' => $stations,
      'context' => 'region'
    ));
  }

  pattern('common/shorturl');

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
