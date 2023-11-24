<nav class="c-pagination" aria-label="Pagination">
    <ul class="c-pagination__items">
        <li class="c-pagination__item">
<?php if ($pagination->hasPrevPage()): ?>
            <a href="<?= $pagination->prevPageURL() ?>" rel="prev" aria-label="Previous results page">Previous</a>
<?php else: ?>
            <span aria-hidden="true">Previous</span>
<?php endif ?>
        </li>

<?php foreach ($pagination->range(10) as $paging): ?>
        <li class="c-pagination__item">
            <a href="<?= $pagination->pageURL($paging); ?>" aria-label="Go to page <?= $paging; ?>"<?php e($paging == $pagination->page(), ' aria-current="page"') ?>><?= $paging; ?></a>
        </li>
<?php endforeach ?>

        <li class="c-pagination__item">
<?php if ($pagination->hasNextPage()): ?>
            <a href="<?= $pagination->nextPageURL() ?>" rel="next" aria-label="Next results page">Next</a>
<?php else: ?>
            <span aria-hidden="true">Next</span>
<?php endif ?>
        </li>
    </ul>
</nav>
