<?
  foreach($routes as $route) {
    $stops = $route->stops()->yaml();

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

    // Empty coordinates will break maps. So, for each
    // geometry check if it returns a completed array
    foreach($geometries as $geometry) {
      if (!empty($geometry)) {
        // Build geometry array with collection of geometries
        $geometry = array(
          'type' => 'GeometryCollection',
          'geometries' => $geometries
        );
      }
    }

    // Build properties array
    $properties = array(
      'title' => (string)$route->title(),
      'url' => (string)$route->url()
    );

    // Build feature array
    $feature[] = array(
      'type' => 'Feature',
      'geometry' => $geometry,
      'properties' => $properties,
    );
  }

  // Build GeoJSON array
  $geojson[] = array(
    'type' => 'FeatureCollection',
    'features' => $feature
  );

  // Encode array as JSON
  echo json_encode($geojson);
