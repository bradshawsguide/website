<?php

// Flatten array
// $array = Array you wish to flatten
// https://gist.github.com/kohnmd/11197713
function flatten_array(array $array) {
  $flattened_array = array();
  array_walk_recursive($array, function($a) use (&$flattened_array) {
    $flattened_array[] = $a;
  });
  return $flattened_array;
}

// Transform array of UIDs to a Kirby Page array
// $uids = Simple array, e.g [brighton, hove]
function UIDStoStationPages($uids) {
  array_walk($uids, function(&$value, $key) {
    if (is_array($value)) {
      $value = page('stations/'.$value[0]);
    } else {
      $value = page('stations/'.$value);
    }
  });

  return $uids;
}

// Generate `LineString` object for use in GeoJSON
// $pages = Kirby Page array
function generateLineString($pages) {
  foreach($pages as $page) {
    // Get latlng coordinates from page
    if(!$page->location()->empty()) {
      $coords[] = [
        $page->location()->coordinates()->lng(),
        $page->location()->coordinates()->lat()
      ];
    };
  }

  if (!empty($coords)) {
    // Create `LineString`
    $lineString = [
      'type' => 'LineString',
      'coordinates' => $coords
    ];

    return $lineString;
  }
}

// Generate `Point` object for use in GeoJSON
// $page = Kirby Page e.g. page('/stations/brighton')
function generatePoint($page) {
  // Get latlng coordinates from page
  if(!$page->location()->empty()) {
    $coords = [
      $page->location()->coordinates()->lng(),
      $page->location()->coordinates()->lat()
    ];
  }

  if (!empty($coords)) {
    // Create `Point`
    $point = [
      'type' => 'Point',
      'coordinates' => $coords
    ];

    return $point;
  }
}
