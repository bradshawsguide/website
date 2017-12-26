<article class="c-card">
    <a class="c-card__body" href="<?= $item->url() ?>">
        <header class="c-card__header">
            <p class="c-card__parent"><?= $item->parent()->title() ?></p>
            <?= brick('h'.(isset($level) ? $level : 3))->html($item->title())->attr('class', 'c-card__title') ?>
        </header>

        <?php if ($item->hasImages()): ?>
        <div class="c-card__img u-artwork" style="background-image: url(<?= $item->image()->crop(16, 9)->dataUri() ?>)">
            <img src="<?= $item->image()->crop(480, 270, 80)->url() ?>" alt="" width="224" height="128"/>
        </div>
        <?php endif; ?>

        <?php if ($item->excerpt()): ?>
        <div class="c-card__main">
            <?php
                pattern('scopes/text', [
                    'content' => $item->excerpt()
                ]);
            ?>
        </div>
        <?php endif; ?>
    </a>
</article>
