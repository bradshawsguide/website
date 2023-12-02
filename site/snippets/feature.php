<article class="c-feature">
    <header>
        <h3>
            <span><?= kti($item->parent()->title()) ?></span>
            <b-visually-hidden>:</b-visually-hidden>
            <a href="<?= $item->url() ?>">
                <?= $item->title() ?>
            </a>
        </h3>
    </header>

    <?php if ($image = $item->image()): ?>
        <img alt="<?= $image->alt() ?>"
            loading="lazy"
            src="<?= $image->thumb("feature")->url() ?>"
            srcset="<?= $image->srcset("feature") ?>">
    <?php endif; ?>

    <?php snippet("scope/text", [
        "content" => $item->excerpt(),
    ]); ?>
</article>
