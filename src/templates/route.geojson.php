<?
  $stops = $page->stops()->yaml();

  // Create `LineString` for route and add to $geometries[]
  $geometries = [
    generateLineString(UIDStoStationPages($stops))
  ];

  // Create `LineString` for route and add to $geometries[]
  foreach ($stops as $stop) {
    if (is_array($stop)) { // Stop is a branch (an array of stops)
      array_push($geometries, generateLineString(UIDStoStationPages($stop)));
    }
  }

  // Create `Point`s for each stop
  foreach (flatten_array($stops) as $stop) {
    $stop = page('/stations/'.$stop);

    // Add `Point` to $geometries[]
    array_push($geometries, generatePoint($stop));
  }

  // Create `GeometryCollection` from $geometries[]
  $geometryCollection = [
    'type' => 'GeometryCollection',
    'geometries' => $geometries
  ];

  // Create properties from page information
  $properties = [
    'title' => (string) $page->title(),
    'url' => (string) $page->url()
  ];

  // Create `Feature`
  $feature = [
    'type' => 'Feature',
    'geometry' => $geometryCollection,
    'properties' => $properties
  ];

  // Encode as JSON
  echo json_encode($feature);
