<?

return [
  'defaults' => [
    'routes' => page('routes')->children()->filterBy('company', 'South Eastern Railway'),
    'context' => 'company'
  ]
];
