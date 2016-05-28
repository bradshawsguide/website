<ul class="c-results">
<? foreach($results as $result): ?>
  <?
  $type = $result->parent()->title();
  if($type == "Stations"):
    $type = "Station";
  elseif($type == "Routes"):
    $type = "Route";
  elseif($type == "Regions"):
    $type = "Region";
  elseif($type == "Railway Companies"):
    $type = "Railway Company";
  endif
  ?>
  <li class="c-results__item">
    <a class="c-results__result" href="<?= $result->url() ?>">
      <h2 class="c-results__title">
        <?= html($result->title()); ?>
        <em class="c-results__type"><?= $type ?></em>
      </h2>
      <div class="c-results__desc s-prose">
        <p><?= excerpt($result->text(), $length=140); ?></p>
        <?= server::get('server_name'); ?><?= $result->url() ?>
      </div>
    </a>
  </li>
<? endforeach ?>
</ul>
