<section class="<?= classList('c-section', $modifiers) ?>">
    <?= brick('h'.$level)->html($title)->addClass('c-section__title') ?>
    <?php
        pattern('scopes/text', [
            'content' => $text
        ]);
    ?>
</section>
