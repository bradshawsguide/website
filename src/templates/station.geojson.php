<?
  if(!$page->location()->empty()) {
    // Build latlng array from station coordinates
    $latlng = array(
      $page->location()->coordinates()->lng(),
      $page->location()->coordinates()->lat()
    );

    // Build geometry array from station coordinates
    $geometry = array(
      'type' => 'Point',
      'coordinates' => $latlng
    );

    // Build properties array from station information
    $properties = array(
      'title' => (string)$page->title(),
      'url' => (string)$page->url()
    );

    // Build GeoJSON array
    $geojson[] = array(
      'type' => 'Feature',
      'geometry' => $geometry,
      'properties' => $properties
    );
  }

  // Encode array as JSON
  echo json_encode($geojson);
