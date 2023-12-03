<article class="c-place" id="<?= $place->uid() ?>">
    <h3>
        <a href="<?= $place->url() ?>">
            <?= $place->title() ?>
            <?php $suffix ? "({$suffix})" : ""; ?>
        </a>
    </h3>

    <?php if ($content = $place->desc()->isNotEmpty()): ?>
        <?php snippet("scope/text", [
            "content" => $place->desc()->excerpt(),
        ]); ?>
    <?php endif; ?>
</article>
