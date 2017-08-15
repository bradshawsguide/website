<?

return function($site, $pages, $page) {
  $section = param('section');
  $routes = page('routes')->children()->visible();

  // Filter by section
  if ($section == true) {
    $routes = $routes->filterBy('section', $section);
  };

  return compact('routes');
};
