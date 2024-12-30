<article class="c-feature" id="<?= $item->uid() ?>">
    <div class="c-feature__container">
        <h3>
            <span><?= kti($item->parent()->title()) ?></span>
            <b-visually-hidden>:</b-visually-hidden>
            <a href="<?= $item->url() ?>">
                <?= kt($item->title()) ?>
                <?php isset($suffix) ? "({$suffix})" : ""; ?>
            </a>
        </h3>

        <?php if ($image = $item->image()): ?>
            <img alt="<?= $image->alt() ?>"
                loading="lazy"
                src="<?= $image->thumb("feature")->url() ?>"
                srcset="<?= $image->srcset("feature") ?>">
        <?php endif; ?>

        <?php if ($content = $item->desc()->isNotEmpty()): ?>
            <?php snippet("scope/text", [
                "content" => $item->desc()->excerpt(),
            ]); ?>
        <?php endif; ?>
    </div>
</article>
