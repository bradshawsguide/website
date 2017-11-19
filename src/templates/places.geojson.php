<?php
foreach ($places as $place) {
    // Create $features array
    $features[] = [
        'type' => 'Feature',
        'geometry' => generatePoint($place),
        'properties' => [
            'title' => (string) $place->title(),
            'url' => (string) $place->url(),
            'marker-size' => 'large'
        ]
    ];
}

// Create `FeatureCollection` from $features array
$featureCollection = [
    'type' => 'FeatureCollection',
    'features' => $features
];

// Encode as JSON
echo json_encode($featureCollection);
