<nav class="c-traverse">
  <h1 class="c-traverse__title">
    Previous and next <?= str::lower($page->parent()->title()) ?>
  </h1>

<? if ($page->hasPrevVisible() == true): ?>
  <a class="c-traverse__link" rel="prev" href="<?= $page->prevVisible()->url() ?>"><span><?= smartypants($page->prevVisible()->title()) ?></span></a>
<? endif ?>

<? if ($page->hasNextVisible() == true): ?>
  <a class="c-traverse__link" rel="next" href="<?= $page->nextVisible()->url() ?>"><span><?= smartypants($page->nextVisible()->title()) ?></span></a>
<? endif ?>
</nav>
