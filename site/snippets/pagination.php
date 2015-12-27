<nav class="pagination">
    <p class="count">
        <strong><?= $pagination->items() ?></strong> results.
        <? if($pagination->hasNextPage()): ?>
            Showing <strong><?= $pagination->numStart() ?></strong> - <strong><?= $pagination->numEnd() ?></strong>
        <? endif ?>
    </p>
    <p class="pages">
        <? if($pagination->hasPrevPage()): ?>
            <a rel="prev" href="<?= str_replace('&ajax=1', '', $pagination->prevPageURL()) ?>">Previous</a>
        <? endif ?>

        <? if($pagination->hasNextPage()): ?>
            <a rel="next" href="<?= str_replace('&ajax=1', '', $pagination->nextPageURL()) ?>">Next</a>
        <? endif ?>
    </p>
</nav><!--/.pagination-->
