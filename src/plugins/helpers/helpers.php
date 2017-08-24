<?php

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
};
