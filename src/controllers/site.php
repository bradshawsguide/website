<?

return function($site, $pages, $page) {
  $countries = page('regions')->children();

  return compact('countries');
};
