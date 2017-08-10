<?
  $items = $page->stops()->yaml();

  // Convert stops() into an array of pages
  array_walk($items, function(&$value, $key) {
    if (is_array($value)) {
      $value = page('stations/'.$value['junction']);
    } else {
      $value = page('stations/'.$value);
    }
  });

  $json = array();

  $coords = array();
  foreach($items as $item) {
    if(!$item->location()->empty()) {
      $coords[] = array(
        $item->location()->coordinates()->lng(),
        $item->location()->coordinates()->lat()
      );

      $geometry = array(
        'type'        => 'LineString',
        'coordinates' => $coords
      );
    }
  }

  $properties = array(
    'title'       => (string)$page->title(),
    'title_later' => ($page->title_later()->isNotEmpty() == 1) ? (string)$item->title_later() : null,
    'url'         => (string)$page->url()
  );

  $json[] = array(
    'type'        => 'Feature',
    'geometry'    => $geometry,
    'properties'  => $properties
  );

  echo json_encode($json);
?>
