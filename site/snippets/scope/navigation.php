<nav class="s-navigation" data-display="aside">
<?php foreach ($items->listed() as $item):
    $title = $item->title_short()->isNotEmpty()
        ? $item->title_short()
        : $item->title();

    echo Html::tag('a', [kti($title)], [
        "aria-current" => $item->isActive() ? "page" : false,
        "href" => $item->url(),
    ], "    ", 1)."\n";
endforeach; ?>
</nav>
