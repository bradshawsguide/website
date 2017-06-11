<?

return [
  'defaults' => [
    'title' => 'Featured stations',
    'items' => page('stations')->children()->filterBy('company', 'south-eastern')
  ]
];
