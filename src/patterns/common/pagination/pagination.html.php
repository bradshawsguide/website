<nav class="c-pagination">
  <h1 class="c-pagination__title">
    <strong><?= $pagination->items() ?></strong> results.
    <? if($pagination->hasNextPage()): ?>
      Showing <strong><?= $pagination->numStart() ?></strong> - <strong><?= $pagination->numEnd() ?></strong>
    <? endif ?>
  </h1>

<? if($pagination->hasPrevPage()): ?>
  <a class="c-traverse__link" rel="prev" href="<?= $pagination->prevPageURL() ?>">Previous</a>
<? endif ?>

<? if($pagination->hasNextPage()): ?>
  <a class="c-traverse__link" rel="next" href="<?= $pagination->nextPageURL() ?>">Next</a>
<? endif ?>
</nav>
