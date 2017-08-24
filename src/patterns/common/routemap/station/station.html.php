<li class="c-routemap__station">
<?
  echo html::a($station->url(), $station->title()->smartypants());

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
</li>
