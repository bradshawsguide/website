<div class="c-page__content">
<?php
if ($page->info()->isNotEmpty() || $page->notes()->isNotEmpty()) {
    snippet("scope/info", [
        "info" => $page->info()->yaml(),
        "notes" => $page->notes()->yaml(),
    ]);
}

$content = $content ?? $page->text();
if ($content != "") {
    snippet("scope/prose", [
        "content" => $content,
        "proseModifiers" => $proseModifiers ?? null,
    ]);

    if (!isset($editable)) {
        snippet("edit");
    }
}
?>
</div>
