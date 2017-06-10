<article class="c-card">
  <header class="c-card__header">
    <a class="c-card__parent" href="<?= $item->parent()->url() ?>"><?= $item->parent()->title() ?></a>
    <h1 class="c-card__title"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h1>
  </header>

  <img class="c-card__img" src="<?= $item->images()->first()->crop(336, 192)->url() ?>" alt="" width="224" height="128"/>

  <div class="c-card__main">
    <p><?= $item->desc() ?></p>
  </div>
</article>
