<?
  $stops = $page->stops()->yaml();

  // LINE STRINGS (ROUTE)
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

  // Create `Point`s for each stop
  foreach (flatten_array($stops) as $stop) {
    $stop = page('/stations/'.$stop);

    // Add `Point` to $geometries array
    array_push($geometries, generatePoint($stop));
  }

  // Create `GeometryCollection` from $geometries array
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
