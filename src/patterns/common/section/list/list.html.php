<section class="<?= classList('c-section', $modifiers) ?>">
    <?= brick('h'.$level)->html($title)->addClass('c-section__title') ?>
    <?php
        pattern('common/list', [
            'items' => $items,
            'component' => $component,
            'modifiers' => [$display]
        ]);
    ?>
</section>
