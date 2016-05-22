<nav class="c-traverse">
  <h1 class="c-traverse__title">Previous and next in <em><?= $p->parent()->title() ?></em></h1>

<? if ($p->hasPrevVisible() == true): ?>
  <a rel="prev" href="<?= $p->prevVisible()->url() ?>"><?= smartypants($p->prevVisible()->title()) ?></a>
<? endif ?>

<? if ($p->hasNextVisible() == true): ?>
  <a rel="next" href="<?= $p->nextVisible()->url() ?>"><span><?= smartypants($p->nextVisible()->title()) ?></span></a>
<? endif ?>
</nav>
