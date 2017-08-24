<?

return function($site, $pages, $page) {
  $routes = page('routes')->children()->visible()->sortBy('dirname');

  // Filter by section
  if ($sectionParam = param('section')) {
    $routes = $routes->filterBy('section', $sectionParam);
  };

  return compact('routes');
};
