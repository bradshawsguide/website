<ul class="<?= classList('c-list', $modifiers ?? null) ?>">
<?php foreach ($items as $item): ?>
    <li class="c-list__item">
    <?php
        if (isset($component)) {
            snippet($component, [
                'item' => $item
            ]);
        } elseif ($item) {
            echo Html::a($item->url(), [smartypants($item->title())]);
        }
    ?>
    </li>
<?php endforeach ?>
</ul>
