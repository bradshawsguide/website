<?

return function($site, $pages, $page) {
  $sectionParam = param('section');
  $stations = page('stations')->children()->visible()->sortby('title');

  // Construct links for section tabs
  foreach(page('sections')->children() as $section) {
    $sectionTabs[] = array(
      '/stations/section:'.$section->dirname(),
      $section->title()
    );
  };

  // Filter by section
  if ($sectionParam == true) {
    $stations = $stations->filterBy('section', $sectionParam);
  };

  return compact('stations', 'sectionTabs');
};
