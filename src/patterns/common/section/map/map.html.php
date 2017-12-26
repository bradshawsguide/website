<section class="c-section c-section--map">
    <?= brick('h'.(isset($level) ? $level : 2))->html($title)->attr('class', 'c-section__title') ?>
    <?php
        pattern('common/map', [
            'url' => $url
        ]);
    ?>
</section>
