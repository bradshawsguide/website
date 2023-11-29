<?php

// Generate `LineString` object for use in GeoJSON
// $pages = Array of StationPages
function generateLineString($pages)
{
    foreach ($pages as $page) {
        if ($location = $page->location()->yaml()) {
            $coords[] = [$location["lon"], $location["lat"]];
        }
    }

    $lineString = [
        "type" => "LineString",
        "coordinates" => $coords,
    ];

    return $lineString;
}

// Generate `Point` object for use in GeoJSON
// $page = StationPage
function generatePoint($page)
{
    if ($location = $page->location()->yaml()) {
        $point = [
            "type" => "Point",
            "coordinates" => [$location["lon"], $location["lat"]],
        ];

        return $point;
    }
}
