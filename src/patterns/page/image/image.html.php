<figure class="c-image">
<? foreach($p->images() as $image): ?>
  <img class="c-image__img"
    srcset="<?= $image->crop(300, 360)->url() ?> 300w,
    <?= $image->crop(150, 180)->url() ?> 150w"
    src="<?= $image->crop(150, 180)->url() ?>"
    alt=""/>
  <? if ($image->caption()): ?>
  <figcaption class="c-image__caption">
    <?= smartypants(kirbytext($image->caption())) ?>
  </figcaption>
  <? endif ?>
<? endforeach ?>
</figure>
