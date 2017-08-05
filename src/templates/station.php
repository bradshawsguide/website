<? snippet('head') ?>

<article class="c-page<? if ($page->hasImages()): ?> c-page--has-poster<? endif ?>">
<?
  pattern('page/header', [
    'p' => $page,
    'notes' => $page->notes(),
    'parent' => $region,
    'subtitle' => $page->title_later(),
    'modifiers' => ['inverted']
  ]);

  pattern('page/content', [
    'p' => $page,
    'image' => 'bleed'
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

  pattern('common/traverse', [
    'p' => $page
  ]);
?>
</article>

<? pattern('common/related') ?>

<? snippet('foot') ?>
