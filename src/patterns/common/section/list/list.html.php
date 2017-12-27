<section class="c-section c-section--list">
    <?= brick('h'.$level)->html($title)->attr('class', 'c-section__title') ?>
    <?php
        pattern('common/list', [
            'items' => $items,
            'component' => $component,
            'modifiers' => [$display]
        ]);
    ?>
</section>
