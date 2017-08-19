<?

return function($site, $pages, $page) {
  $companies = page('companies')->children()->visible()->sortBy('title');
  $routes = page('routes')->children()->visible();

  // Filter by section
  if($sectionParam = param('section')) {
    $routes = $routes->filterBy('section', $sectionParam);
  };

  return compact('companies', 'routes');
};
