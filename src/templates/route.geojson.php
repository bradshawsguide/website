<?
  function generateLineString($stops) {
    $linestring = array();

    foreach($stops as $stop) {
      if (is_array($stop)) {
        $page = page('stations/'.$stop[0]);
      } else {
        $page = page('stations/'.$stop);
      }

      if(!$page->location()->empty()) {
        $coords[] = array(
          $page->location()->coordinates()->lng(),
          $page->location()->coordinates()->lat()
        );

        $lineString = array(
          'type' => 'LineString',
          'coordinates' => $coords
        );
      };
    }

    return $lineString;
  };

  $stops = $page->stops()->yaml();

  $geometries = array(
    generateLineString($stops),
  );

  foreach($stops as $stop) {
    if (is_array($stop)) {
      $branchstops = $stop;
      array_push($geometries, generateLineString($stop));
    }
  }

  $geometry = array(
    'type' => 'GeometryCollection',
    'geometries' => $geometries
  );

  $properties = array(
    'title' => (string)$page->title(),
    'url' => (string)$page->url()
  );

  $json[] = array(
    'type' => 'Feature',
    'geometry' => $geometry,
    'properties' => $properties
  );

  echo json_encode($json);
?>
