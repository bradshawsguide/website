<?

return function($site, $pages, $page) {
  // Countries are the direct children of explore index
  $countries = page('places')->children();

  $featured = page('stations')->children()->filterBy('region', $page->uid())->filter(function($page) {
    return $page->hasImages();
  });

  return compact('countries', 'featured');
};
