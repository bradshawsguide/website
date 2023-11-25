<figure class="c-figure u-<?= $image->name() ?>">
<?php if ($image->name() == 'pull-right'): ?>
    <img class="c-figure__img"
        srcset="<?= $image->crop(600, 800, 80)->url() ?> 600w, <?= $image->crop(300, 400, 80)->url() ?> 300w, <?= $image->crop(150, 200, 80)->url() ?> 150w"
        src="<?= $image->crop(150, 200, 80)->url() ?>"
        loading="lazy"
        sizes="(max-width: 640px) 100vw, 18em"
        alt="">
<?php else: ?>
    <img class="c-figure__img"
        srcset="<?= $image->crop(1200, 800, 80)->url() ?> 1280w, <?= $image->crop(600, 400, 80)->url() ?> 640w, <?= $image->crop(300, 200, 80)->url() ?> 320w"
        src="<?= $image->crop(300, 200, 80)->url() ?>"
        loading="lazy"
        sizes="100vw"
        alt="">
<?php endif ?>
<?php if ($image->caption()): ?>
    <figcaption class="c-figure__caption">
        <?= kt($image->caption()) ?>
    </figcaption>
<?php endif ?>
</figure>
