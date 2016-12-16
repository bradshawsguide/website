<nav class="c-traverse">
  <h1 class="c-traverse__title u-hidden">
    Previous and next <?= str::lower($p->parent()->title()) ?>
  </h1>

<? if ($p->hasPrevVisible() == true): ?>
  <a class="c-traverse__link" rel="prev" href="<?= $p->prevVisible()->url() ?>"><span><?= smartypants($p->prevVisible()->title()) ?></span></a>
<? endif ?>

<? if ($p->hasNextVisible() == true): ?>
  <a class="c-traverse__link" rel="next" href="<?= $p->nextVisible()->url() ?>"><span><?= smartypants($p->nextVisible()->title()) ?></span></a>
<? endif ?>
</nav>
