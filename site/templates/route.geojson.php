<?php

$stops = $page->stops()->yaml();
$lineString = [];

// Create `LineString` for line (and any branches)
foreach (array_extract_arrays($stops) as $line) {
    // For each UID in $line array, convert to StationPage array
    array_walk($line, function (&$value, $key) {
        $value = page($value);
    });

    $lineString[] = generateLineString($line);
}

// Create `Feature` for line (and any branches)
$features[] = [
    "type" => "Feature",
    "geometry" => [
        "type" => "GeometryCollection",
        "geometries" => $lineString,
    ],
    "properties" => [
        "title" => (string) $page->title(),
        "url" => (string) $page->url(),
    ],
];

// Create a `Feature` for each stop
foreach (array_flatten($stops) as $stop) {
    $page = page($stop);

    if ($page->place()->isNotEmpty()) {
        $markerSize = "large";
    } else {
        $markerSize = "small";
    }

    $geometry = generatePoint($page);

    if ($geometry) {
        $features[] = [
            "type" => "Feature",
            "geometry" => generatePoint($page),
            "properties" => [
                "title" => (string) $page->title(),
                "url" => (string) $page->url(),
                "marker-size" => $markerSize,
            ],
        ];
    }
}

// Create `FeatureCollection` from $features array
$featureCollection = [
    "type" => "FeatureCollection",
    "features" => $features,
];

// Encode as JSON
echo json_encode($featureCollection);
