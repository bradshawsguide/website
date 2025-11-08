<header class="c-header">
    <?php if (!$pretitle && $nav): ?>
        <nav><?= $nav ?></nav>
    <?php endif; ?>

    <h<?= $level ?? 1 ?>>
        <?= $pretitle ? Html::tag("span", $pretitle) : "" ?>
        <?= kti($title) ?>
    </h<?= $level ?? 1 ?>>
    <?php if ($subtitle = $subtitle ?? $page->subtitle()): ?>
        <?= kt($subtitle) ?>
    <?php endif; ?>
</header>
