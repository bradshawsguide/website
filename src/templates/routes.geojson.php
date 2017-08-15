<?
  if (param('section')) {
    $routes = $routes->filterBy('section', param('section'));
  }

  $feature = array();
  foreach($routes as $route) {
    $stops = $route->stops()->yaml();

    // Convert stops() into an array of pages
    array_walk($stops, function(&$value, $key) {
      if (is_array($value)) {
        $value = page('stations/'.$value['junction']);
      } else {
        $value = page('stations/'.$value);
      }
    });

    $json = array();
    $geometry = array();
    $coords = array();

    foreach($stops as $stop) {
      if(!$stop->location()->empty()) {
        $coords[] = array(
          $stop->location()->coordinates()->lng(),
          $stop->location()->coordinates()->lat()
        );

        $geometry = array(
          'type' => 'LineString',
          'coordinates' => $coords
        );
      }
    }

    $properties = array(
      'title' => (string)$route->title(),
      'url' => (string)$route->url()
    );

    if (!empty($coords)) {
      $feature[] = array(
        'type' => 'Feature',
        'geometry' => $geometry,
        'properties' => $properties,
      );
    };
  }

  $json[] = array(
    'type' => 'FeatureCollection',
    'features' => $feature
  );

  echo json_encode($json);
?>
