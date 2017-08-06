<? snippet('head') ?>

<article class="c-page<? if ($page->hasImages()): ?> c-page--has-poster<? endif ?>">
<?
  pattern('common/header', [
    'title' => $page->title(),
    'suffix' => $page->title_suffix(),
    'notes' => $page->notes(),
    'parent' => $region,
    'subtitle' => $page->title_later(),
    'modifiers' => ['inverted']
  ]);

  snippet('content');

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

  pattern('common/traverse');
?>
</article>

<? pattern('common/related') ?>

<? snippet('foot') ?>
