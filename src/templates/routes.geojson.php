<?
  $features = [];

  foreach ($routes as $route) {
    $stops = $route->stops()->yaml();

    // Create `LineString` for main line and add to $geometries[]
    $geometries = [
      generateLineString(UIDStoStationPages($stops))
    ];

    // Create `LineString` for any branches and add to $geometries[]
    foreach ($stops as $stop) {
      if (is_array($stop)) {
        array_push($geometries, generateLineString(UIDStoStationPages($stop)));
      }
    }

    // Create `Feature` from main and branch lines
    $features[] = [
      'type' => 'Feature',
      'geometry' => [
        'type' => 'GeometryCollection',
        'geometries' => $geometries
      ],
      'properties' => [
        'title' => (string) $route->title(),
        'url' => (string) $route->url()
      ]
    ];
  }

  // Create `FeatureCollection` from $features array
  $featureCollection = [
    'type' => 'FeatureCollection',
    'features' => $features
  ];

  // Encode as JSON
  echo json_encode($featureCollection);
