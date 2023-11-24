<section class="c-index" id="<?= $letter ?>">
    <h2 class="c-index__title"><?= Str::upper($letter) ?></h2>
    <?php
        snippet('list', [
            'items' => $items,
            'modifiers' => isset($listAs) ? [$listAs] : null
        ]);
    ?>
</section>
