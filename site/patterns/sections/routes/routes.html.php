<?
  switch ($context) {
    case 'company':
      $title = "Routes operated";
      break;
    case 'station':
      $title = "Routes serving the station";
      break;
    case 'routes':
      $title = $object->title();
      $url = $object->url();
  }

  if(isset($url)) {
    $heading = html::a($url, $title);
  } else {
    $heading = $title;
  }
?>
<section class="c-section c-section--routes">
  <h1 class="c-section__title"><?= $heading ?></h1>
  <?
    pattern('common/list', array(
      'items' => $routes
    ));
  ?>
</section>
