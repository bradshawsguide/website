<? snippet('head') ?>

<article class="c-page<? if ($page->hasImages()): ?> c-page--has-poster<? endif ?>">
<?
  $region = $page->region()->uid();
  $regionUid = $site->page('regions')->index()->filterBy('uid','sussex');
  $regionUrl = $regionUid->url();
  $regionTitle = page($regionUid)->title();

  pattern('page/header', [
    'p' => $page,
    'notes' => $page->notes(),
    'parent' => html::a($regionUrl, $regionTitle)
  ]);

  if($page->hasImages()) {
    pattern('page/media', ['p' => $page]);
  };

  pattern('page/content', [
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

  pattern('section/related', [
    'p' => $page,
    'type' => 'railway station'
  ]);

  pattern('page/footer', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
