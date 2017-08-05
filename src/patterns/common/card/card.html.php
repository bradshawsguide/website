<article class="c-card">
  <a class="c-card__body" href="<?= $item->url() ?>">
    <header class="c-card__header">
      <h1 class="c-card__title"><?= $item->title() ?></h1>
      <p class="c-card__parent"><?= $item->parent()->title() ?></p>
    </header>

    <? if($item->hasImages()): ?>
      <img class="c-card__img" src="<?= $item->images()->first()->crop(336, 192)->url() ?>" alt="" width="224" height="128"/>
    <? endif; ?>

    <div class="c-card__main">
      <?
        pattern('scopes/prose', [
          'content' => $item->desc()->isNotEmpty() ? $item->desc() : excerpt($item->text(), $length=240)
        ]);
      ?>
    </div>
  </a>
</article>
