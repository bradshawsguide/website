<?php

$results = site()->search('brighton', 'title|text');

foreach($results as $result) {
  return [
    'defaults' => [
      'result' => $result
    ]
  ];
};
