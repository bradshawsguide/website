<?
  foreach ($stations as $station) {
    if (!$station->location()->empty()) {
      // Build latlng array from station coordinates
      $latlng = [
        $station->location()->coordinates()->lng(),
        $station->location()->coordinates()->lat()
      ];

      // Build geometry array from station coordinates
      $geometry = [
        'type' => 'Point',
        'coordinates' => $latlng
      ];

      // Build properties array from station information
      $properties = [
        'title' => (string) $station->title(),
        'url' => (string) $station->url()
      ];

      // Build feature array
      $features[] = [
        'type' => 'Feature',
        'geometry' => $geometry,
        'properties' => $properties
      ];
    }
  }

  // Build GeoJSON array
  $geojson = [
    'type' => 'FeatureCollection',
    'features' => $features
  ];

  // Encode array as JSON
  echo json_encode($geojson);
