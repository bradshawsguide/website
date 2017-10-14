<?php if (count($items)): ?>
<section class="c-section">
    <?= brick('h'.(isset($level) ? $level : 2))->html($title)->attr('class', 'c-section__title') ?>
    <?php
        pattern('common/list', [
            'items' => $items,
            'modifiers' => ['columns']
        ]);
    ?>
</section>
<?php endif ?>
