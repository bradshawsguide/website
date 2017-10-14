<?php if ($pagination->hasPages()): ?>
<nav class="c-pagination">
    <?php if ($pagination->hasPrevPage()): ?>
        <a class="c-pagination__prev" rel="prev" href="<?= $pagination->prevPageURL() ?>" aria-label="Previous results page">Previous</a>
    <?php else: ?>
        <span class="c-pagination__prev" aria-hidden="true">Previous</span>
    <?php endif ?>

    <?php foreach ($pagination->range(10) as $paging): ?>
        <a href="<?= $pagination->pageURL($paging); ?>"><?= $paging; ?></a>
    <?php endforeach ?>

    <?php if ($pagination->hasNextPage()): ?>
        <a class="c-pagination__next" rel="next" href="<?= $pagination->nextPageURL() ?>" aria-label="Next results page">Next</a>
    <?php else: ?>
        <span class="c-pagination__prev" aria-hidden="true">Next</span>
    <?php endif ?>
</nav>
<?php endif ?>
