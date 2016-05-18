<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/header');

  pattern('content/prose');

  $company = $page->title();
  $routes = $pages->children()->filterBy('company', $company);
  pattern('section/routes', array(
    'routes' => $routes,
    'context' => 'company'
  ));

  $company = kirby()->request()->path(2);
  $stations = $pages->children()->filterBy('company', '*=', $company);
  pattern('section/stations', array(
    'stations' => $stations,
    'context' => 'company'
  ));

  pattern('section/related');

  pattern('shorturl');
?>
</article>

<? snippet('foot') ?>
