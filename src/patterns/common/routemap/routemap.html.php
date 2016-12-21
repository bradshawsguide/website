<aside class="c-routemap">
  <h1 class="u-hidden">Route Map</h1>
  <ol class="c-routemap__stops">
  <? foreach($stops as $stop):
    // Get page array for item in `stops:` YAML list
    $stop = page('stations/'.$stop);

    // Get `routes` YAML list in this stop
    $routes = $stop->route()->yaml();

    foreach ($routes as $route) {
      if (count($routes) > 1) {
        $type = 'interchange';
      } else {
        $type = 'station';
      }
    }
  ?>
    <li class="c-routemap__<?= $type ?>">
      <?= html::a($stop->url(), smartypants($stop->title())) ?>
      <? if ($type == "interchange"): ?>
      <ul class="c-routemap__branches">
      <?
        foreach ($routes as $branch):
          $branch = page('routes/'.$branch);
          $terminus = a::last(str::split($branch->title(), $separator=' to ', $length=1));

          if ($page->url() != $branch->url()):
      ?>
        <li class="c-routemap__branch">
          <?= html::a($branch->url(), smartypants($terminus)) ?>
        </li>
      <?
          endif;
        endforeach
      ?>
      </ul>
      <? endif ?>
    </li>
  <? endforeach ?>
  </ol>
</aside>
