<nav class="pagination">
    <p class="count">
        <strong><?= $pagination->countItems() ?></strong> results.
        <? if($pagination->hasNextPage()): ?>
            Showing <strong><?= $pagination->numStart() ?></strong> - <strong><?= $pagination->numEnd() ?></strong>
        <? endif ?>
    </p>
    <? if($pagination->countItems() > $pagination->numEnd()): ?>
        <p class="pages">
            <? if($pagination->hasPrevPage()): ?>
                <a rel="prev" href="<?= str_replace('&ajax=1', '', $pagination->prevPageURL()) ?>">Previous</a>
            <? endif ?>

            <? if($pagination->hasNextPage()): ?>
                <a rel="next" href="<?= str_replace('&ajax=1', '', $pagination->nextPageURL()) ?>">Next</a>
            <? endif ?>
        </p>
    <? endif ?>
</nav><!--/.pagination-->
