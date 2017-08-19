<?

return function($site, $pages, $page) {
  $sectionParam = param('section');
  $stations = page('stations')->children()->visible()->sortby('title');

  // Filter by section
  if($sectionParam = param('section')) {
    $stations = $stations->filterBy('section', $sectionParam);
  };

  return compact('stations');
};
