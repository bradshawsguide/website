<?php if (count($items)): ?>
<ul class="<?= classList('c-list', $modifiers) ?>">
<?php foreach ($items as $item): ?>
    <li class="c-list__item">
        <?= html::a($item->url(), smartypants($item->title())) ?>
    </li>
<?php endforeach ?>
</ul>
<?php endif ?>
