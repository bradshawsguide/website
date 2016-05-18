<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb', array(
    'parent' => $page->country()
  ));

  pattern('common/header');

  pattern('common/navigation');

  pattern('content/prose');

  pattern('sections/related');

  $region = $page->title();
  $stations = $pages->find('stations')->children()->filterBy('region', $region);
  if($stations->count()) {
    pattern('sections/stations', array(
      'stations' => $stations,
      'context' => 'region'
    ));
  }

  pattern('common/shorturl');

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
