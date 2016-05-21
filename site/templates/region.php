<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb');

  pattern('page/header');

  pattern('page/navigation');

  pattern('page/content');

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
