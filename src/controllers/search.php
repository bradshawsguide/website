<?

return function($site, $pages, $page) {
  $qeo = get('g');
  $query = get('q');
  $results = $site->search($query, 'title|text');
  $results = $results->paginate(10);

  return [
    'geo'        => $qeo,
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination()
  ];
};
