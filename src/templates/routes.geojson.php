<?php
$features = [];

foreach ($routes as $route) {
    $stops = $route->stops()->yaml();
    $linestring = [];

    // Create `LineString` for line (and any branches)
    foreach (array_extract_arrays($stops) as $line) {
        // For each UID in $line array, convert to StationPage array
        array_walk($line, function (&$value, $key) {
            $value = page('stations/'.$value);
        });

        $linestring[] = generateLineString($line);
    }

    // Create `Feature` from main and branch lines
    $features[] = [
        'type' => 'Feature',
        'geometry' => [
            'type' => 'GeometryCollection',
            'geometries' => $linestring
        ],
        'properties' => [
            'title' => (string) $route->title(),
            'url' => (string) $route->url(),
            'stroke-width' => 4
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
