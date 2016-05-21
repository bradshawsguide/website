<figure class="c-poster">
<? foreach($p->images() as $image): ?>
  <img class="c-poster__img" src="<?= $image->url() ?>" alt=""/>
  <? if ($image->caption()): ?>
  <figcaption class="c-poster__caption">
    <?= smartypants($image->caption()) ?>
  </figcaption>
  <? endif ?>
<? endforeach ?>
</figure>
