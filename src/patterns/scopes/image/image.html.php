<?
  $modifier = $image->position()->isNotEmpty() ? ' s-image--'.$image->position() : null
?>
<figure class="s-image<?= $modifier ?>">
<? if ($image->position() == 'pull-right'): ?>
  <img
    srcset="<?= $image->crop(300, 360)->url() ?> 300w, <?= $image->crop(150, 180)->url() ?> 150w"
    src="<?= $image->crop(150, 180)->url() ?>"
    alt=""/>
<? endif ?>
<? if ($image->position() == 'bleed'): ?>
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
</figure>
