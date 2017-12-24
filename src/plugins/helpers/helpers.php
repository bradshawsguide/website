<?php

// Flatten array
// $array = Array you wish to flatten
// https://gist.github.com/kohnmd/11197713
// Returns a single dimensional array
function array_flatten(array $array)
{
    $flattened_array = [];

    array_walk_recursive($array, function ($a) use (&$flattened_array) {
        $flattened_array[] = $a;
    });

    return $flattened_array;
}

// Extract arrays from multidimensional array
// $array = Array you wish to extract arrays from
// https://forum.getkirby.com/t/9042
// Returns an array of single dimensional arrays
function array_extract_arrays(array $array)
{
    $chunks = [];

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $chunks[0][$key] = $value[0];
            $chunks = array_merge($chunks, array_extract_arrays($value));
        } else {
            $chunks[0][$key] = $value;
        }
    }

    return $chunks;
}

// Generate `LineString` object for use in GeoJSON
// $pages = Array of StationPages
function generateLineString($pages)
{
    foreach ($pages as $page) {
        if ($page->geolng() && $page->geolat()) {
            $coords[] = [
                $page->geolng()->float(),
                $page->geolat()->float()
            ];
        }
    }

    $lineString = [
        'type' => 'LineString',
        'coordinates' => $coords
    ];

    return $lineString;
}

// Generate `Point` object for use in GeoJSON
// $page = StationPage
function generatePoint($page)
{
    if ($page->geolng()) {
        $point = [
            'type' => 'Point',
            'coordinates' => [
                $page->geolng()->float(),
                $page->geolat()->float()
            ]
        ];

        return $point;
    }
}

// Create globally available of section information
function sections()
{
    $sections = site()->sections()->yaml();

    array_walk($sections, function (&$value, $key) {
        $value['uid'] = (string) $value['uid'];
        $value['url'] = '/routes/section:'.$value['uid'];
        $value['label'] = 'Section '.$value['uid'];
        $value['routes'] = page('routes')->children()->filterBy('section', '==', $value['uid']);
    });

    return $sections;
}
