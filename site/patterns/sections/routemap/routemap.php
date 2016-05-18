<?
  $route = "- routes/".kirby()->request()->path()->last();
  $items = $pages->find('stations')->children()->filterBy('route', '*=', $route);
  if($items && $items->count()):
?>
<section class="c-section c-section--route">
  <h1 class="c-section__title">Route Map</h1>
  <ol class="c-routemap">
  <? foreach ($items as $item): ?>
    <?
    if($item->text()->isEmpty()) {
      $type = "unremarkable";
    } else {
      $type = "station";
      $class = "c-routemap__station";
    }

    $routes = related($item->route());

    foreach ($routes as $connection) {
      if ($connection->title() !== $page->title()) {
        $type = "interchange";
        $class = "c-routemap__interchange";
      }
    }
    ?>
      <li class="<?= $class ?>">
        <a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
        <? if ($type == "interchange"): ?>
          <ul>
          <? foreach ($routes as $connection): ?>
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
