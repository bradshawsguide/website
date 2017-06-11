<a class="u-block" href="<?= $item->url() ?>">
  <article class="c-card">
    <header class="c-card__header">
      <p class="c-card__parent u-block__link"><?= $item->parent()->title() ?></p>
      <h1 class="c-card__title"><?= $item->title() ?></h1>
    </header>

    <? if($item->hasImages()): ?>
      <img class="c-card__img" src="<?= $item->images()->first()->crop(336, 192)->url() ?>" alt="" width="224" height="128"/>
    <? endif; ?>

    <div class="c-card__main">
      <p>
        <? if($item->desc()->isNotEmpty()): ?>
          <?= $item->desc(); ?>
        <? else: ?>
          <?= excerpt($item->text(), $length=240); ?>
        <? endif; ?>
      </p>
    </div>
  </article>
</a>
