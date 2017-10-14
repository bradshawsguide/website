<?php

return [
    'defaults' => [
        'title' => 'Distances of Places from '.page('stations/ventnor')->title(),
        'distances' => page('stations/ventnor')->distances()->yaml()
    ]
];
