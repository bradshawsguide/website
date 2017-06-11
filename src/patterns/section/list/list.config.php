<?php

return [
  'defaults' => [
    'title' => 'Stations served',
    'items' => page('routes')->children()->filterBy('company', 'south-eastern')
  ]
];
