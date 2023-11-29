<ul class="c-list" data-display="<?= $display ?>">
<?php foreach ($items as $item): ?>
    <li><?= isset($component)
        ? snippet($component, ["item" => $item])
        : Html::a($item->url(), [kti($item->title())]) ?></li>
<?php endforeach; ?>
</ul>
