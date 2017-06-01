<?
  if (param('section')) {
    $items = $page->children()->filterBy('section', param('section'));
  } else {
    $items = $page->children();
  }

  $json = array();

  foreach($items as $item) {
    if ($item->location()->isNotEmpty()) {
      $latlng = array(
        $item->location()->coordinates()->lng(),
        $item->location()->coordinates()->lat()
      );

      $geometry = array(
        'type'        => 'Point',
        'coordinates' => $latlng
      );

      $properties = array(
        'title'       => (string)$item->title(),
        'title_later' => ($item->title_later()->isNotEmpty() == 1) ? (string)$item->title_later() : null,
        'url'         => (string)$item->url()
      );

      $json[] = array(
        'type'        => 'Feature',
        'geometry'    => $geometry,
        'properties'  => $properties
      );
    }
  }

  echo json_encode($json);
?>
