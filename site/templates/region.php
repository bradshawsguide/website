<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb', array(
    'parent' => $page->country()
  ));

  pattern('page/header');

  pattern('common/navigation');

  pattern('content/prose');

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
