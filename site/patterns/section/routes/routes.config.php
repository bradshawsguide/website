<?

return [
  'defaults' => [
    'title' => 'Routes operated',
    'routes' => page('routes')->children()->filterBy('company', 'south-eastern')
  ]
];
