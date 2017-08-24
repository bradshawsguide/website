<?
  foreach($stations as $station) {
    if(!$station->location()->empty()) {
      // Build latlng array from station coordinates
      $latlng = array(
        $station->location()->coordinates()->lng(),
        $station->location()->coordinates()->lat()
      );

      // Build geometry array from station coordinates
      $geometry = array(
        'type' => 'Point',
        'coordinates' => $latlng
      );

      // Build properties array from station information
      $properties = array(
        'title' => (string)$station->title(),
        'url' => (string)$station->url()
      );

      // Build GeoJSON array
      $geojson[] = array(
        'type' => 'Feature',
        'geometry' => $geometry,
        'properties' => $properties
      );
    }
  }

  // Encode array as JSON
  echo json_encode($geojson);
