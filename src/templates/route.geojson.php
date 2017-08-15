<?
  $stops = $page->stops()->yaml();

  // Convert stops() into an array of pages
  array_walk($stops, function(&$value, $key) {
    if (is_array($value)) {
      $value = page('stations/'.$value['junction']);
    } else {
      $value = page('stations/'.$value);
    }
  });

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
