<?

return function($site, $pages, $page) {
  $geo = get('g');
  $query = get('q');
  $pages = 10;
  $options = [
    'minlength' => 2,
    'fields' => ['title','text'],
    'words' => true,
    'score' => [
      'title' => 10,
      'route' => 2,
      'text' => 1
    ]
  ];

  if ($query == true) { // Free text search
    $results = $site->search($query, $options);
    $results = $results->paginate($pages, ['method' => 'query']);
    $title = "Search results for ‘".esc(get('q'))."’";
  } elseif ($geo == true) { // Geo located search
    $point = geo::point($geo);
    $results = page('stations')->children()->filterBy('location', 'radius', [
      'lat' => $point->lat(),
      'lng' => $point->lng(),
      'radius' => 15
    ]);
    $results = $results->paginate($pages);
    $title = "Stations near you";
    $query = esc($geo);
  } else {
    $results = null;
    $title = $page->title();
  };

  return compact('results', 'title', 'query');
};
