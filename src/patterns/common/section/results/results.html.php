<section class="c-section">
<?= brick('h'.(isset($level) ? $level : 2))->html($title)->attr('class', 'c-section__title') ?>
<?php
    foreach ($results as $result) {
        if ($result->intendedTemplate() == 'station') {
            $result = $result->placePage();
        }

        pattern('common/result', [
            'result' => $result
        ]);
    }
?>
</section>
