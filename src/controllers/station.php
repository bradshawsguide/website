<?

return function($site, $pages, $page) {
  $regionPath = $site->page('regions')->index()->filterBy('uid', $page->region());
  $region = page($regionPath);

  return compact('region');
};
