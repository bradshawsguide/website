<article class="c-route-item">
    <h3>
        <a href="<?= $item->url() ?>">
            <?= $item->shortTitle() ?>
        </a>
    </h3>
    <?php if ($item->subtitle()->isNotEmpty()): ?>
        <p><?= $item->subtitle() ?></p>
    <?php endif; ?>
</article>
