<?

return function($site, $pages, $page) {
  $geo = get('g');
  $query = get('q');
  $pages = 12;

  // Free text search
  if ($query == true) {
    $results = $site->search($query, 'title|text');
    $results = $results->paginate($pages);
  };

  // Geo located search
  if ($geo == true) {
    $point = geo::point($geo);
    $results = page('stations')->children()->filterBy('location', 'radius', [
      'lat' => $point->lat(),
      'lng' => $point->lng(),
      'radius' => 15
    ]);
    $results = $results->paginate($pages);
    $query = esc($geo);
  };

  return compact('results', 'query');
};
