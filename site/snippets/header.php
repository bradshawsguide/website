<header class="<?= classList("c-header", $modifiers ?? null) ?>">
<?php if (isset($parent)): ?>
    <nav><?= $parent ?></nav>
<?php endif; ?>
    <h1>
        <?= isset($pretitle) ? Html::tag("span", $pretitle) : "" ?>
        <?= isset($title) ? kti($title) : kti($page->title()) ?>
    </h1>
<?php if (isset($subtitle)): ?>
    <p><?= $subtitle ?></p>
<?php endif; ?>
</header>
