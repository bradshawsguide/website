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

// Generate LineString object for use in GeoJSON
// $uids = Array of station UIDS, e.g. [brighton, new-cross]
function generateLineString($uids) {
  $lineString = array();

  foreach($uids as $uid) {
    if (is_array($uid)) {
      $page = page('stations/'.$uid[0]);
    } else {
      $page = page('stations/'.$uid);
    }

    if(!$page->location()->empty()) {
      $coords[] = array(
        $page->location()->coordinates()->lng(),
        $page->location()->coordinates()->lat()
      );

      $lineString = array(
        'type' => 'LineString',
        'coordinates' => $coords
      );
    };
  }

  if (!empty($coords)) {
    return $lineString;
  }
}
