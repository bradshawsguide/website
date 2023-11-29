<nav class="s-navigation" data-display="aside">
<?php foreach ($items->listed() as $item): ?>
    <?php $title = $item->title_short()->isNotEmpty()
        ? $item->title_short()
        : $item->title(); ?>
    <a href="<?= $item->url() ?>"<?php e(
    $item->isActive(),
    ' aria-current="page"'
); ?>><?= kti($title) ?></a>
<?php endforeach; ?>
</nav>
