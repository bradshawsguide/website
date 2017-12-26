<section class="c-section c-section--results">
    <?= brick('h'.$level)->html($title)->attr('class', 'c-section__title') ?>
    <?php
        foreach ($results as $result) {
            pattern('common/result', [
                'result' => $result
            ]);
        }
    ?>
</section>
