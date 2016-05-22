<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  // $routes = list of route pages where `company:` frontmatter
  //           value matches the UID of this company
  $routes = page('routes')->children()->filterBy('company', $page->uid());

  pattern('section/routes', [
    'title' => 'Routes operated',
    'routes' => $routes
  ]);

  $companyPath = kirby()->request()->path(2);
  pattern('section/stations', [
    'stations' => $pages->children()->filterBy('company', '*=', $companyPath),
    'context' => 'company'
  ]);

  pattern('section/related');

  pattern('common/shorturl');
?>
</article>

<? snippet('foot') ?>
