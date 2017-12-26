<section class="c-section c-section--results">
<?= brick('h'.(isset($level) ? $level : 2))->html($title)->attr('class', 'c-section__title') ?>
<?php
    foreach ($results as $result) {
        pattern('common/result', [
            'result' => $result
        ]);
    }
?>
</section>
