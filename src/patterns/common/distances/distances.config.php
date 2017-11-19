<?php

$page = page('places/england/surrey/reigate');

return [
    'defaults' => [
        'title' => 'Distances of Places from '.$page->title(),
        'distances' => $page->distances()->yaml()
    ]
];
