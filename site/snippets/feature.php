<article class="c-feature">
    <header class="c-feature__header">
        <?php
            snippet('title', [
                'title' => Html::a($item->url(), $item->title()),
                'level' => $level ?? 3,
                'class' => 'c-feature__title'
            ]);
        ?>
        <p class="c-feature__parent"><?= $item->parent()->title() ?></p>
    </header>

    <?php if ($item->hasImages()): ?>
        <img class="c-feature__img" src="<?= $item->image()->crop(480, 270, 80)->url() ?>" loading="lazy" alt="" width="224" height="128">
    <?php endif; ?>

    <?php if ($item->excerpt()): ?>
    <div class="c-feature__main">
        <?php
            snippet('scope/text', [
                'content' => $item->excerpt()
            ]);
        ?>
    </div>
    <?php endif; ?>
</article>
