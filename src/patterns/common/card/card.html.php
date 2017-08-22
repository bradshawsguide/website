<article class="c-card">
  <a class="c-card__body" href="<?= $item->url() ?>">
    <header class="c-card__header">
      <?= brick('h'.(isset($level) ? $level : 3))->html($item->title())->attr('class', 'c-card__title') ?>
      <p class="c-card__parent"><?= $item->parent()->title() ?></p>
    </header>

    <? if($item->hasImages()): ?>
      <img class="c-card__img" src="<?= $item->images()->first()->crop(336, 192)->url() ?>" alt="" width="224" height="128"/>
    <? endif; ?>

    <div class="c-card__main">
      <?
        pattern('scopes/prose', [
          'content' => !$item->desc()->empty() ? $item->desc() : excerpt($item->text(), $length=240)
        ]);
      ?>
    </div>
  </a>
</article>
