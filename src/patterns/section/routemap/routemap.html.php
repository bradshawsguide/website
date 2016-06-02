<? if($stops): ?>
<section class="c-section c-section--route">
  <h1 class="c-section__title">Route Map</h1>
  <ol class="c-routemap">
  <? foreach($stops as $stop):
    // Get page array for item in `stops:` YAML list
    $stop = page('stations/'.$stop);

    // Get `routes` YAML list in this stop
    $routes = $stop->route()->yaml();

    foreach ($routes as $route) {
      // Get page array for item in `route:` YAML list
      $route = page('routes/'.$route);

      if ($route !== $page) {
        $type = 'interchange';
      } else {
        $type = 'station';
      }
    }
  ?>
    <li class="c-routemap__<?= $type ?>">
      <?= html::a($stop->url(), smartypants($stop->title())) ?>
      <? if ($type == "interchange"): ?>
      <ul>
        <?
          foreach ($routes as $branch):
            $branch = page('routes/'.$branch);
            $terminus = a::last(str::split($branch->title(), $separator=' to ', $length=1));
        ?>
        <li><?= html::a($branch->url(), smartypants($terminus)) ?></li>
        <? endforeach ?>
      </ul>
      <? endif ?>
    </li>
  <? endforeach ?>
  </ol>
</section>
<? endif ?>
