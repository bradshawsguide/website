<? snippet('head') ?>

<article class="c-page<? if ($page->hasImages()): ?> c-page--has-poster<? endif ?>">
<?
  $region = $page->region()->uid();
  $regionUrl = $site->page('regions')->index()->filterBy('uid', $region);
  $regionTitle = page($regionUrl)->title();

  pattern('page/header', [
    'p' => $page,
    'notes' => $page->notes(),
    'parent' => html::a('/'.$regionUrl, $regionTitle),
    'subtitle' => $page->title_later(),
    'modifiers' => ['inverted']
  ]);

  if($page->hasImages()) {
    pattern('page/media', ['p' => $page]);
  };

  pattern('page/content', [
    'p' => $page,
    'images' => false
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

  pattern('page/footer', [
    'p' => $page
  ]);
?>
</article>

<? pattern('common/related') ?>

<? snippet('foot') ?>
