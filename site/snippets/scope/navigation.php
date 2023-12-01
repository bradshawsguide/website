<nav class="s-navigation" data-display="aside">
    <?php foreach ($items->listed() as $item):
        $title = $item->title_short()->isNotEmpty()
            ? $item->title_short()
            : $item->title(); ?>
        <a href="<?= $item->url() ?>"
            <?= ariacurrent($item->isActive()) ?>>
            <?= kti($title) ?>
        </a>
    <?php
    endforeach; ?>
</nav>
