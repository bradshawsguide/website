<?= $page ?>
<nav class="traverse">
  <h1 class="traverse__title">Previous and Next in <em><?= $page->parent()->title() ?></em></h1>

<? if ($page->hasPrevVisible() == true): ?>
  <a rel="prev" href="<?= $page->prevVisible()->url() ?>"><?= smartypants($page->prevVisible()->title()) ?></a>
<? endif ?>

<? if ($page->hasNextVisible() == true): ?>
  <a rel="next" href="<?= $page->nextVisible()->url() ?>"><span><?= smartypants($page->nextVisible()->title()) ?></span></a>
<? endif ?>
</nav>
