<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  // Get route UIDs listed under `route:` frontmatter
  $routes = $page->route()->yaml();

  // Convert $routes => array of pages
  array_walk($routes, function(&$value, $key) {
    $value = page('routes/'.$value);
  });

  if (!$page->route()->empty()) {
    pattern('section/routes', [
      'title' => 'Routes serving the station',
      'routes' => $routes
    ]);
  }

  pattern('section/related', ['p' => $page]);

  pattern('common/shorturl');

  pattern('common/traverse', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
