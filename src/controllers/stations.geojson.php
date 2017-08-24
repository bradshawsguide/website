<?

return function($site, $pages, $page) {
  $stations = page('stations')->children()->sortby('title');

  // Filter by section
  if($sectionParam = param('section')) {
    $stations = $stations->filterBy('section', $sectionParam);
  };

  return compact('stations');
};
