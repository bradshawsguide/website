<article class="c-feature">
    <a class="c-feature__body" href="<?= $item->url() ?>">
        <header class="c-feature__header">
            <p class="c-feature__parent"><?= $item->parent()->title() ?></p>
            <?= brick('h'.$level)->html($item->shortTitle())->addClass('c-feature__title') ?>
        </header>

        <?php if ($item->hasImages()): ?>
        <div class="c-feature__img u-artwork" style="background-image: url(<?= $item->image()->crop(16, 9)->dataUri() ?>)">
            <img src="<?= $item->image()->crop(480, 270, 80)->url() ?>" alt="" width="224" height="128"/>
        </div>
        <?php endif; ?>

        <?php if ($item->excerpt()): ?>
        <div class="c-feature__main">
            <?php
                pattern('scopes/text', [
                    'content' => $item->excerpt()
                ]);
            ?>
        </div>
        <?php endif; ?>
    </a>
</article>
