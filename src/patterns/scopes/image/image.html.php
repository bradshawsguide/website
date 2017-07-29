<figure class="s-image <?= $layout ?>">
  <? foreach($p->images() as $image): ?>
    <? if ($layout == 'u-pull-right'): ?>
      <img
        srcset="<?= $image->crop(300, 360)->url() ?> 300w, <?= $image->crop(150, 180)->url() ?> 150w"
        src="<?= $image->crop(150, 180)->url() ?>"
        alt=""/>
    <? endif ?>
    <? if ($layout == 'u-bleed'): ?>
      <img
        srcset="<?= $image->crop(1280, 720)->url() ?> 1280w, <?= $image->crop(640, 360)->url() ?> 640w, <?= $image->crop(320, 180)->url() ?> 320w"
        src="<?= $image->crop(320, 180)->url() ?>"
        alt=""/>
    <? endif ?>
    <? if ($image->caption()): ?>
      <figcaption>
        <?= smartypants(kirbytext($image->caption())) ?>
      </figcaption>
    <? endif ?>
  <? endforeach ?>
</figure>
