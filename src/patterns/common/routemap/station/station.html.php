<?
  echo '<span class="c-routemap__station">'.html::a($station->url(), $station->title()->smartypants()).'</span>';

  // Get `routes` YAML list at this station
  $routes = $station->route()->yaml();

  // If station lies on more than one route, disclose them
  if (count($routes) > 1) {
    pattern('common/routemap/interchange', [
      'station' => $station,
      'routes' => $routes
    ]);
  }
?>
