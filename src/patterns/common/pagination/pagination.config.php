<?php

$results = site()->search('brighton', 'title|text')->paginate(10);

return [
    'defaults' => [
        'pagination' => $results->pagination()
    ]
];
