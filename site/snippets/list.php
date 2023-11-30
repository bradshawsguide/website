<ul class="c-list"<?php e($display, ' data-display="' . $display . '"'); ?>>
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
