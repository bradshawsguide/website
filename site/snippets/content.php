<article class="c-content">
    <?php if ($page->info()->isNotEmpty() || $page->notes()->isNotEmpty()) {
        snippet("scope/info", [
            "info" => $page->info()->yaml(),
            "notes" => $page->notes()->yaml(),
        ]);
    } ?>

    <?php if ($content = $content ?? $page->text()) {
        snippet("scope/prose", compact("content"));
    } ?>

    <?php if (!isset($editable) && $page->gitUrl()) {
        snippet("edit");
    } ?>
</article>
