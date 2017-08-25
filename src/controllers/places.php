<?

return function($site, $pages, $page) {
  // Countries are the direct children of explore index
  $countries = page('places')->children();

  $places = page('stations')->children()->filter(function($page) {
    return $page->hasImages();
  });

  // Filter by section
  if($sectionParam = param('section')) {
    $places = $places->filterBy('section', $sectionParam);
  };

  return compact('countries', 'places');
};
