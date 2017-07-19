<?

return function($site, $pages, $page) {
  $section = param('section');
  $companies = page('companies')->children()->visible()->sortBy('title');
  $routes = page('routes')->children()->visible();

  // Filter by section
  if ($section == true) {
    $routes = $routes->filterBy('section', $section);
  };

  return compact('companies', 'routes');
};
