<?

return function($site, $pages, $page) {
  $geo = get('g');
  $query = get('q');

  // Free text search
  if ($query == true) {
    $results = $site->search($query, 'title|text');
    $results = $results->paginate(10);

    return [
      'query'      => $query,
      'results'    => $results,
      'pagination' => $results->pagination()
    ];
  };

  // Geo located search
  if ($geo == true) {
    $point = geo::point($geo);
    $results = page('stations')->children()->filterBy('location', 'radius', [
      'lat'    => $point->lat(),
      'lng'    => $point->lng(),
      'radius' => 15
    ]);
    $results = $results->paginate(10);

    return [
      'query'      => $geo,
      'results'    => $results,
      'pagination' => $results->pagination()
    ];
  };
};
