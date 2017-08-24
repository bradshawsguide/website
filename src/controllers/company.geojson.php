<?

return function($site, $pages, $page) {
  $routes = page('routes')->children()->filterBy('company', $page->uid());

  // Filter by section
  if ($sectionParam = param('section')) {
    $routes = $routes->filterBy('section', $sectionParam);
  };

  return compact('routes');
};
