<figure class="c-figure c-figure--<?= $image->name() ?>">
<? if($image->name() == 'cover'): ?>
  <div class="c-figure__img u-artwork" style="background-image: url(<?= $image->crop(7, 4)->dataUri() ?>)">
    <img
      srcset="<?= $image->crop(1280, 720, 80)->url() ?> 1280w, <?= $image->crop(640, 360, 80)->url() ?> 640w, <?= $image->crop(320, 180, 80)->url() ?> 320w"
      src="<?= $image->crop(320, 180, 80)->url() ?>"
      sizes="100vw"
      alt=""/>
  </div>
<? else: ?>
  <div class="c-figure__img u-artwork" style="background-image: url(<?= $image->crop(3, 4)->dataUri() ?>)">
    <img
      srcset="<?= $image->crop(600, 800, 80)->url() ?> 600w, <?= $image->crop(300, 400, 80)->url() ?> 300w, <?= $image->crop(150, 200, 80)->url() ?> 150w"
      src="<?= $image->crop(150, 200, 80)->url() ?>"
      sizes="(max-width: 640px) 100vw, 18em"
      alt=""/>
  </div>
<? endif ?>
<? if ($image->caption()): ?>
  <figcaption class="c-figure__caption">
    <?= smartypants(kirbytext($image->caption())) ?>
  </figcaption>
<? endif ?>
</figure>
