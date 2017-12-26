<section class="c-index" id="<?= $letter ?>">
    <h2 class="c-index__title"><?= str::upper($letter) ?></h2>
    <?php
        pattern('common/list', [
            'items' => $items,
            'modifiers' => isset($listAs) ? [$listAs] : null
        ]);
    ?>
</section>
