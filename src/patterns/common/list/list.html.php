<ul class="<?= classList('c-list', $modifiers) ?>">
<?php foreach ($items as $item): ?>
    <li class="c-list__item">
    <?php
        if (isset($component)) {
            pattern($component, [
                'item' => $item
            ]);
        } else {
            echo html::a($item->url(), smartypants($item->title()));
        }
    ?>
    </li>
<?php endforeach ?>
</ul>
