<?php
$features = [];

foreach ($routes as $route) {
    $stops = $route->stops()->yaml();
    $linestring = [];

    // Create `LineString` for lines (and any of their branches)
    foreach (array_extract_arrays($stops) as $line) {
        // For each UID in $line array, convert to StationPage array
        array_walk($line, function (&$value, $key) {
            $value = UIDtoStationPage($value);
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
            'url' => (string) $route->url()
        ]
    ];

    // Create a `Feature` for each stop
    foreach (array_flatten($stops) as $stop) {
        $page = UIDtoStationPage($stop);

        if ($page->place()) {
            $markerSize = 'large';
        } else {
            $markerSize = 'small';
        };

        $features[] = [
            'type' => 'Feature',
            'geometry' => generatePoint($page),
            'properties' => [
                'title' => (string) $page->title(),
                'url' => (string) url('stations/'.$page->uid()),
                'marker-size' => $markerSize
            ]
        ];
    }
}

// Create `FeatureCollection` from $features array
$featureCollection = [
    'type' => 'FeatureCollection',
    'features' => $features
];

// Encode as JSON
echo json_encode($featureCollection);
