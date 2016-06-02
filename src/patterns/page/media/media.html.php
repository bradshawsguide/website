<div class="c-page__media">
  <figure class="c-poster">
  <? foreach($p->images() as $image): ?>
    <img class="c-poster__img"
      srcset="<?= $image->crop(1280, 720)->url() ?> 1280w,
      <?= $image->crop(640, 360)->url() ?> 640w,
      <?= $image->crop(320, 180)->url() ?> 320w"
      src="<?= $image->crop(320, 180)->url() ?>"
      alt=""/>
    <? if ($image->caption()): ?>
    <figcaption class="c-poster__caption">
      <?= smartypants(kirbytext($image->caption())) ?>
    </figcaption>
    <? endif ?>
  <? endforeach ?>
  </figure>
</div>
