<?
  $stops = $page->stops()->yaml();

  // Build geometries array from stops along this route
  $geometries = [
    generateLineString($stops),
  ];

  // Add branch lines to geometries array
  foreach ($stops as $stop) {
    if (is_array($stop)) {
      array_push($geometries, generateLineString($stop));
    }
  }

  // Build geometry array with collection of geometries
  $geometry = [
    'type' => 'GeometryCollection',
    'geometries' => $geometries
  ];

  // Build properties array
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

  // Encode array as JSON
  echo json_encode($geojson);
