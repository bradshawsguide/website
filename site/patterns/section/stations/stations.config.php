<?php

$articles = page('stations')->children()->visible()->paginate(5);

return [
  'defaults' => [
    'pagination' => $articles->pagination()
  ]
];
