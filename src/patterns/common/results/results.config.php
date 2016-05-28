<?php

$results = site()->search('brighton', 'title|text');

return [
  'defaults' => [
    'results' => $results
  ]
];
