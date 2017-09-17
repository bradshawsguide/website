<?

return function($site, $pages, $page) {
  $companies = $page->company()->yaml();

  // Convert UIDs listed under `company:` to HTML links
  array_walk($companies, function(&$value, $key) {
    $page = page('companies/'.$value);
    $value = html::a($page->url(), $page->title());
  });

  // If route jointly operated, show links to both companies
  if (count($companies) > 1) {
    $companyLink = implode(' & ', $companies).' (Joint)';
  } else {
    $companyLink = $companies[0];
  };

  // If route has a line name, show that after company name
  if (!$page->line()->empty()) {
    $subtitle = $page->line()."&#160;—&#160;".$companyLink;
  } else {
    $subtitle = $companyLink;
  };

  return compact('subtitle');
};
