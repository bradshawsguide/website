<?
  foreach ($stations as $station) {
    if (!$station->location()->empty()) {
      // Create properties from station information
      $properties = [
        'title' => (string) $station->title(),
        'url' => (string) $station->url()
      ];

      // Create $features array
      $features[] = [
        'type' => 'Feature',
        'geometry' => generatePoint($station),
        'properties' => $properties
      ];
    }
  }

  // Create `FeatureCollection` from $features array
  $featureCollection = [
    'type' => 'FeatureCollection',
    'features' => $features
  ];

  // Encode as JSON
  echo json_encode($featureCollection);
