<?

return function($site, $pages, $page) {
  // Countries are the direct children of regions index
  $countries = page('regions')->children();

  return compact('countries');
};
