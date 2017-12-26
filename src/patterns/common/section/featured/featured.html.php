<section class="<?= classList('c-section', $modifiers) ?>">
<?= brick('h'.(isset($level) ? $level : 2))->html($title)->attr('class', 'c-section__title') ?>
<?php
    if (isset($content)):
        pattern('scopes/prose', [
            'content' => $content,
            'modifier' => 'section'
        ]);
    endif
?>
<?php if (count($items)): ?>
<ul class="c-list c-list--grid">
    <?php foreach ($items as $item):?>
    <li class="c-list__item">
        <?php
            pattern('common/card', [
                'item' => $item
            ]);
        ?>
    </li>
    <?php endforeach ?>
</ul>
<?php endif ?>
</section>
