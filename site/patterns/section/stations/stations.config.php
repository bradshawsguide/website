<?php

return [
  'defaults' => [
    'stations' => page('routes')->children()->filterBy('company', 'South Eastern Railway'),
    'context' => 'company'
  ]
];
