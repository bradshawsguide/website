<?

return function($site, $pages, $page) {
  $regionPath = $site->page('regions')->index()->filterBy('uid', $page->region());
  $region = page($regionPath);

  // Get route UIDs listed under `route:` frontmatter
  $routes = $page->route()->yaml();

  // Convert $routes => array of pages
  array_walk($routes, function(&$value, $key) {
    $value = page('routes/'.$value);
  });

  return compact('region', 'routes');
};
