<?
  if (!$page->location()->empty()) {
    // Build latlng array from station coordinates
    $latlng = [
      $page->location()->coordinates()->lng(),
      $page->location()->coordinates()->lat()
    ];

    // Build geometry array from station coordinates
    $geometry = [
      'type' => 'Point',
      'coordinates' => $latlng
    ];

    // Build properties array from station information
    $properties = [
      'title' => (string) $page->title(),
      'url' => (string) $page->url()
    ];

    // Build GeoJSON array
    $geojson = [
      'type' => 'Feature',
      'geometry' => $geometry,
      'properties' => $properties
    ];
  }

  // Encode array as JSON
  echo json_encode($geojson);
