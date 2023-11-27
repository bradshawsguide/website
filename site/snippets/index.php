<article class="c-index" id="<?= $letter ?>">
    <h2><?= Str::upper($letter) ?></h2>
    <?= snippet('list', [
        'items' => $items,
        'display' => $listDisplay ?? null
    ]); ?>
</article>
