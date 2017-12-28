<article class="c-feature">
    <header class="c-feature__header">
        <?php
            $title = html::a($item->url(), $item->title());
            echo brick('h'.$level)->html($title)->addClass('c-feature__title')
        ?>
        <p class="c-feature__parent"><?= $item->parent()->title() ?></p>
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
</article>
