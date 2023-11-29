<nav class="c-pagination" aria-label="Pagination">
    <ul class="c-pagination__items">
<?php if ($pagination->hasPrevPage()): ?>
        <li><?= Html::a(
            $pagination->prevPageURL(),
            ['<b-icon name="prev"/></b-icon>Previous'],
            [
                "aria-label" => "Previous results page",
                "rel" => "prev",
            ]
        ) ?></li>
<?php endif; ?>
<?php foreach ($pagination->range(10) as $paging): ?>
        <li><?= Html::a($pagination->pageURL($paging), $paging, [
            "aria-current" => $paging == $pagination->page() ? "page" : false,
            "aria-label" => "Go to page " . $paging,
        ]) ?></li>
<?php endforeach; ?>
<?php if ($pagination->hasNextPage()): ?>
        <li><?= Html::a(
            $pagination->nextPageURL(),
            ['<b-icon name="next"/></b-icon>Next'],
            ["aria-label" => "Next results page", "rel" => "next"]
        ) ?></li>
<?php endif; ?>
    </ul>
</nav>
