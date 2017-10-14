<?php
foreach ($stations as $station) {
    if (!$station->location()->empty()) {
        if ($station->isVisible()) {
            $markerSize = 'large';
        } else {
            $markerSize = 'small';
        };

        // Create $features array
        $features[] = [
            'type' => 'Feature',
            'geometry' => generatePoint($station),
            'properties' => [
                'title' => (string) $station->title(),
                'url' => (string) $station->url(),
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
