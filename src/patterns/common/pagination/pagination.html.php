<? if($pagination->hasPages()): ?>
<nav class="c-pagination">
  <? if($pagination->hasPrevPage()): ?>
    <a class="c-pagination__prev" rel="prev" href="<?= $pagination->prevPageURL() ?>" aria-label="Previous results page">Previous</a>
  <? else: ?>
    <span class="c-pagination__prev" aria-hidden="true">Previous</span>
  <? endif ?>

  <? foreach($pagination->range(10) as $paging): ?>
    <a href="<?= $pagination->pageURL($paging); ?>"><?= $paging; ?></a>
  <? endforeach ?>

  <? if($pagination->hasNextPage()): ?>
    <a class="c-pagination__next" rel="next" href="<?= $pagination->nextPageURL() ?>" aria-label="Next results page">Next</a>
  <? else: ?>
    <span class="c-pagination__prev" aria-hidden="true">Next</span>
  <? endif ?>
</nav>
<? endif ?>
