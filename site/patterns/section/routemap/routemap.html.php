<?
  $stops = $page->stops()->yaml();

  if(isset($stops)):
?>
<section class="c-section c-section--route">
  <h1 class="c-section__title">Route Map</h1>
  <ol class="c-routemap">
  <? foreach($stops as $stop):
    $station = page('stations/'.$stop);

    if($station->text()->isEmpty()) {
      $type = "unremarkable";
    } else {
      $type = "station";
    }

    $class = "c-routemap__station";
    $routes = $station->route()->yaml();

    foreach ($routes as $route) {
      $route = page('routes/'.$route);

      if ($route !== $page) {
        $type = "interchange";
        $class = "c-routemap__interchange";
      }
    }
    ?>
      <li class="<?= $class ?>">
        <a href="<?= $station->url() ?>"><?= smartypants($station->title()) ?></a>
        <? if ($type == "interchange"): ?>
          <ul>
          <? foreach ($routes as $connection): ?>
            <? $connection = page('routes/'.$connection); ?>
            <? if ($connection->title() !== $page->title()): ?>
              <li>
                <a href="<?= $connection->url() ?>"><?= smartypants($connection->destination()) ?></a>
              </li>
            <? endif ?>
          <? endforeach ?>
          </ul>
        <? endif ?>
      </li>
    <? endforeach ?>
  </ol>
</section>
<? endif ?>
