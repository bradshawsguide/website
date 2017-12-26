<section class="c-section c-section--text">
    <?= brick('h'.$level)->html($title)->attr('class', 'c-section__title') ?>

    <?php
        pattern('scopes/text', [
            'content' => $text
        ]);
    ?>
</section>
