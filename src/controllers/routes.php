<?

return function($site, $pages, $page) {
  $sectionParam = param('section');
  $companies = page('companies')->children()->visible()->sortBy('title');
  $routes = page('routes')->children()->visible();

  // Construct links for section tabs
  foreach(page('sections')->children() as $section) {
    $sectionTabs[] = array(
      '/routes/section:'.$section->dirname(),
      $section->title()
    );
  };

  // Filter by section
  if ($sectionParam == true) {
    $routes = $routes->filterBy('section', $sectionParam);
  };

  return compact('companies', 'routes', 'sectionTabs');
};
