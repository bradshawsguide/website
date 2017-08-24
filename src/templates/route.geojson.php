<?
  $stops = $page->stops()->yaml();

  // Build geometries array from stops along this route
  $geometries = array(
    generateLineString($stops),
  );

  // Add branch lines to geometries array
  foreach($stops as $stop) {
    if (is_array($stop)) {
      array_push($geometries, generateLineString($stop));
    }
  }

  // Build geometry array with collection of geometries
  $geometry = array(
    'type' => 'GeometryCollection',
    'geometries' => $geometries
  );

  // Build properties array
  $properties = array(
    'title' => (string)$page->title(),
    'url' => (string)$page->url()
  );

  // Build GeoJSON array
  $geojson[] = array(
    'type' => 'Feature',
    'geometry' => $geometry,
    'properties' => $properties
  );

  // Encode array as JSON
  echo json_encode($geojson);
