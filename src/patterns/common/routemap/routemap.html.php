<aside class="c-routemap">
  <h1 class="u-hidden">Route Map</h1>
  <ol class="c-routemap__stops">
  <? foreach($stops as $stop):
    if (is_array($stop)) {
      $type = 'branch';
      $station = page('stations/'.$stop['junction']);
      $branchstops = $stop['stops'];
    } else {
      // Get page array for stop in `stops:` YAML list
      $station = page('stations/'.$stop);

      // Get `routes` YAML list in this stop
      $routes = $station->route()->yaml();

      // Get station type
      foreach ($routes as $route) {
        if (count($routes) > 1) {
          $type = 'interchange';
        } else {
          $type = 'station';
        }
      }
    }
  ?>
    <li class="c-routemap__stop c-routemap__stop--<?= $type ?>">
    <?
      echo html::a($station->url(), $station->title()->smartypants());

      if ($type == 'interchange') {
        pattern('common/interchange', [
          'station' => $station,
          'routes' => $routes
        ]);
      } elseif ($type == 'branch') {
        pattern('common/branch', [
          'stops' => $branchstops
        ]);
      }
    ?>
    </li>
  <? endforeach ?>
  </ol>
</aside>
