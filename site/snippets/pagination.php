<nav class="c-pagination" aria-label="Pagination">
    <ul class="c-pagination__items">
        <?php if ($pagination->hasPrevPage()): ?>
            <li>
                <a href="<?= $pagination->prevPageURL() ?>" rel="prev" aria-label="Previous results page">
                    <b-icon name="prev"/></b-icon>Previous
                </a>
            </li>
        <?php endif; ?>
        <?php foreach ($pagination->range(10) as $paging): ?>
            <li>
                <a href="<?= $pagination->pageURL($paging) ?>"
                    aria-label="<?= "Go to page {$paging}" ?>"
                    <?= ariacurrent($paging == $pagination->page()) ?>>
                    <?= $paging ?>
                </a>
            </li>
        <?php endforeach; ?>
        <?php if ($pagination->hasNextPage()): ?>
            <li>
                <a href="<?= $pagination->nextPageURL() ?>" rel="next" aria-label="Next results page">
                    Next<b-icon name="next"/></b-icon>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
