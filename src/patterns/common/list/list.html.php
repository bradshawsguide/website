<?php if (count($items)): ?>
<?php
    if (isset($modifiers)) {
        $mods = implode(preg_filter('/^/', ' c-list--', $modifiers));
    }
?>
<ul class="c-list<?= $mods ?? '' ?>">
<?php foreach ($items->sortby('title') as $item): ?>
    <li class="c-list__item">
        <?= html::a($item->url(), smartypants($item->shortTitle())) ?>
    </li>
<?php endforeach ?>
</ul>
<?php endif ?>
