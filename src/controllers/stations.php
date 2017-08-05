<?

return function($site, $pages, $page) {
  $section = param('section');
  $stations = page('stations')->children()->visible()->sortby('title');

  // Filter by section
  if ($section == true) {
    $stations = $stations->filterBy('section', $section);
  };

  return compact('stations');
};
