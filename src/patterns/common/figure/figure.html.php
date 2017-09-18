<?
  $modifier = !$image->position()->empty() ? ' c-figure--'.$image->position() : ' c-figure--bleed'
?>
<figure class="c-figure<?= $modifier ?>">
<? if ($image->position() == 'pull-right'): ?>
  <div class="c-figure__img u-artwork" style="background-image: url(<?= $image->crop(5, 6)->dataUri() ?>)">
    <img
      srcset="<?= $image->crop(300, 360, 80)->url() ?> 300w, <?= $image->crop(150, 180, 80)->url() ?> 150w"
      src="<?= $image->crop(150, 180, 80)->url() ?>"
      sizes="(max-width: 640px) 100vw, 18em"
      alt=""/>
  </div>
<? else: ?>
  <div class="c-figure__img u-artwork" style="background-image: url(<?= $image->crop(7, 4)->dataUri() ?>)">
    <img
      srcset="<?= $image->crop(1280, 720, 80)->url() ?> 1280w, <?= $image->crop(640, 360, 80)->url() ?> 640w, <?= $image->crop(320, 180, 80)->url() ?> 320w"
      src="<?= $image->crop(320, 180, 80)->url() ?>"
      sizes="100vw"
      alt=""/>
  </div>
<? endif ?>
<? if ($image->caption()): ?>
  <figcaption class="c-figure__caption">
    <?= smartypants(kirbytext($image->caption())) ?>
  </figcaption>
<? endif ?>
</figure>
