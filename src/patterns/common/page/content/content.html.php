<div class="c-page__content">
<?php
    if (!$page->info()->empty() || !$page->notes()->empty()) {
        pattern('scopes/info', [
            'info' => $page->info()->yaml(),
            'notes' => $page->notes()->yaml()
        ]);
    }

    if (!$page->text()->empty()) {
        pattern('scopes/prose', [
            'content' => $page->text(),
            'proseModifiers' => $proseModifiers
        ]);

        if (!isset($editable)) {
            pattern('common/edit');
        }
    }
?>
</div>
