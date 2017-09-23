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

// Generate `LineString` object for use in GeoJSON
// $uids = Array of station UIDs, e.g. [brighton, new-cross]
// TODO: Accepts only a single page() instead of array of UIDs
function generateLineString($uids) {
  foreach($uids as $uid) {
    if (is_array($uid)) {
      $page = page('stations/'.$uid[0]);
    } else {
      $page = page('stations/'.$uid);
    }

    if(!$page->location()->empty()) {
      $coords[] = [
        $page->location()->coordinates()->lng(),
        $page->location()->coordinates()->lat()
      ];

      $lineString = [
        'type' => 'LineString',
        'coordinates' => $coords
      ];
    };
  }

  if (!empty($coords)) {
    return $lineString;
  }
}

// Generate `Point` object for use in GeoJSON
// $page = Page array, e.g. page('/stations/brighton')
function generatePoint($page) {
  // Get latlng coordinates from page
  $coords = [
    $page->location()->coordinates()->lng(),
    $page->location()->coordinates()->lat()
  ];

  // Create `Point`
  $point = [
    'type' => 'Point',
    'coordinates' => $coords
  ];

  if (!empty($coords)) {
    return $point;
  }
}
