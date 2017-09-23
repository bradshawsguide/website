<?
  foreach ($routes as $route) {
    $stops = $route->stops()->yaml();

    // Add `LineString` of route to $geometries array
    $geometries = [
      generateLineString($stops),
    ];

    // If stop is a junction, create `LineString` from stops
    // along branch, and add to $geometries array
    foreach ($stops as $stop) {
      if (is_array($stop)) {
        array_push($geometries, generateLineString($stop));
      }
    }

    // Empty coordinates will break maps. So, for each
    // geometry check if it returns a completed array
    foreach ($geometries as $geometryCollection) {
      if (!empty($geometryCollection)) {
        // Create `GeometryCollection` from $geometries array
        $geometryCollection = [
          'type' => 'GeometryCollection',
          'geometries' => $geometries
        ];
      }
    }

    // Create properties from route information
    $properties = [
      'title' => (string) $route->title(),
      'url' => (string) $route->url()
    ];

    // Create $features array
    $features[] = [
      'type' => 'Feature',
      'geometry' => $geometryCollection,
      'properties' => $properties,
    ];
  }

  // Create `FeatureCollection` from $features array
  $featureCollection = [
    'type' => 'FeatureCollection',
    'features' => $features
  ];

  // Encode as JSON
  echo json_encode($featureCollection);
