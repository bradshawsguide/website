<?
  // NOTE: Same code used on Routes index and Company page
  // TODO: Might want to merge the two, somehow.
  $features = [];

  foreach ($routes as $route) {
    $stops = $route->stops()->yaml();

    // Create `LineString` for route and add to $geometries[]
    $geometries = [
      generateLineString(UIDStoStationPages($stops))
    ];

    // Create `LineString` for each branch and add to $geometries[]
    foreach ($stops as $stop) {
      if (is_array($stop)) {
        array_push($geometries, generateLineString(UIDStoStationPages($stop)));
      }
    }

    // Create `GeometryCollection` from $geometries[]
    foreach ($geometries as $geometryCollection) {
      $geometryCollection = [
        'type' => 'GeometryCollection',
        'geometries' => $geometries
      ];
    }

    // Create properties from route information
    $properties = [
      'title' => (string) $route->title(),
      'url' => (string) $route->url()
    ];

    // Create $features array
    // Empty coordinates break maps. Create `Feature` only
    // if `GeometryCollection` has geometries
    if (!empty($geometryCollection)) {
      $features[] = [
        'type' => 'Feature',
        'geometry' => $geometryCollection,
        'properties' => $properties,
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
