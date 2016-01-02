<nav class="pagination">
    <p class="pagination__count">
        <strong><?= $pagination->items() ?></strong> results.
        <? if($pagination->hasNextPage()): ?>
            Showing <strong><?= $pagination->numStart() ?></strong> - <strong><?= $pagination->numEnd() ?></strong>
        <? endif ?>
    </p>

    <p class="pagination__pages">
        <? if($pagination->hasPrevPage()): ?>
            <a rel="prev" href="<?= $pagination->prevPageURL() ?>">Previous</a>
        <? endif ?>

        <? if($pagination->hasNextPage()): ?>
            <a rel="next" href="<?= $pagination->nextPageURL() ?>">Next</a>
        <? endif ?>
    </p>
</nav>
