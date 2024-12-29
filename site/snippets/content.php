<article class="c-content">
    <?php snippet("header", [
        "level" => $level ?? 1,
        "nav" => $page->parent()
            ? Html::a($page->parent()->url(), $page->parent()->title())
            : null,
        "pretitle" => $pretitle ?? null,
        "title" => $title ?? $page->title(),
    ]); ?>

    <?php if ($page->info()->isNotEmpty() || $page->notes()->isNotEmpty()) {
        snippet("scope/info", [
            "info" => $page->info()->yaml(),
            "notes" => $page->notes()->yaml(),
        ]);
    } ?>

    <?= $slots->beforeContent() ?>

    <?php if ($content = $content ?? $page->text()) {
        snippet("scope/prose", compact("content"));
    } ?>

    <?php if (!isset($editable) && $page->gitUrl()) {
        snippet("edit");
    } ?>

    <?= $slots->default() ?>
</article>
