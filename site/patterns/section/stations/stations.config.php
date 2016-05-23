<?php

return [
  'defaults' => [
    'title' => 'Stations served',
    'stations' => page('routes')->children()->filterBy('company', 'london-brighton-and-south-coast')
  ]
];
