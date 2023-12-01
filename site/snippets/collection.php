<article class="c-collection" data-display="<?= $display ?? "list" ?>">
    <?php if ($header = $slots->header()): ?>
        <?= $header ?>
    <?php elseif (isset($title)): ?>
        <h2><?= $title ?></h2>
    <?php endif; ?>

    <ul>
        <?php foreach ($items as $item): ?>
            <li>
                <?php if (isset($component)): ?>
                    <?= snippet($component, ["item" => $item]) ?>
                <?php else: ?>
                    <a href="<?= $item->url() ?>"><?= kti($item->title()) ?></a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</article>