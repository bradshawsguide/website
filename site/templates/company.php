<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header');

  pattern('content/prose');

  $company = $page->title();
  pattern('section/routes', array(
    'routes' => $pages->children()->filterBy('company', $company),
    'context' => 'company'
  ));

  $companyPath = kirby()->request()->path(2);
  pattern('section/stations', array(
    'stations' => $pages->children()->filterBy('company', '*=', $companyPath),
    'context' => 'company'
  ));

  pattern('section/related');

  pattern('shorturl');
?>
</article>

<? snippet('foot') ?>
