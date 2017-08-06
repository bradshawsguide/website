<?

return function($site, $pages, $page) {
  // Get station UIDs listed under `featured:` frontmatter
  $featured = $page->featured()->yaml();

  // Convert $featured => array of pages
  array_walk($featured, function(&$value, $key) {
    $value = page('stations/'.$value);
  });

  return compact('featured');
};
