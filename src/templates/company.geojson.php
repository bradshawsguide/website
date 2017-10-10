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

    // Create a `Feature` for each stop
    foreach (flatten_array($stops) as $stop) {
      $stop = page('/stations/'.$stop);

      if ($stop->isVisible()) {
        $markerSize = 'large';
      } else {
        $markerSize = 'small';
      };

      $features[] = [
        'type' => 'Feature',
        'geometry' => generatePoint($stop),
        'properties' => [
          'title' => (string) $stop->title(),
          'url' => (string) $stop->url(),
          'marker-size' => $markerSize
        ]
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
