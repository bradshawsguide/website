<?

return function($site, $pages, $page) {
  $query = get('q');
  $results = $site->search($query, 'title|text');
  $results = $results->paginate(10);

  return [
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination()
  ];
};
