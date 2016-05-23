<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  // Get list of route pages where `company:` value  matches UID of this company
  $routes = page('routes')->children()->filterBy('company', $page->uid());

  pattern('section/routes', [
    'title' => 'Routes operated',
    'routes' => $routes
  ]);

  $companyPath = kirby()->request()->path(2);
  pattern('section/stations', [
    'title' => 'Stations served',
    'stations' => $pages->children()->filterBy('company', '*=', $companyPath)
  ]);

  pattern('section/related');

  pattern('common/shorturl');
?>
</article>

<? snippet('foot') ?>
