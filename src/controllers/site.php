<?

return function($site, $pages, $page) {
  // Countries are the direct children of explore index
  $countries = page('places')->children();

  return compact('countries', 'featured');
};
