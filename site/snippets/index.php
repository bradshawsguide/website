<section class="c-index" id="<?= $letter ?>">
    <h2 class="c-index__title"><?= Str::upper($letter) ?></h2>
    <?= snippet('list', [
        'items' => $items,
        'display' => $listDisplay ?? null
    ]); ?>
</section>
