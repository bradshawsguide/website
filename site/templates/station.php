<? snippet('head') ?>

<article class="c-page<? if ($page->hasImages()): ?> c-page--has-poster<? endif ?>">
<?
  pattern('page/header', ['p' => $page]);

  if($page->hasImages()) {
    pattern('page/media', ['p' => $page]);
  };

  pattern('page/content', [
    'modifier' => 'narrow',
    'p' => $page
  ]);

  // Get route UIDs listed under `route:` frontmatter
  $routes = $page->route()->yaml();

  // Convert $routes => array of pages
  array_walk($routes, function(&$value, $key) {
    $value = page('routes/'.$value);
  });

  pattern('section/routes', [
    'title' => 'Routes serving the station',
    'items' => $routes
  ]);

  pattern('section/related', ['p' => $page]);

  pattern('common/shorturl', ['p' => $page]);

  pattern('common/traverse', [
    'p' => $page,
    'title' => 'Section'.$page->section()
  ]);
?>
</article>

<? snippet('foot') ?>
