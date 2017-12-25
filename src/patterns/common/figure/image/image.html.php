<figure class="c-figure c-figure--<?= $image->name() ?>">
<?php if ($image->name() == 'pull-right'): ?>
    <div class="c-figure__img u-artwork" style="background-image: url(<?= $image->crop(3, 4)->dataUri() ?>)">
        <img
            srcset="<?= $image->crop(600, 800, 80)->url() ?> 600w, <?= $image->crop(300, 400, 80)->url() ?> 300w, <?= $image->crop(150, 200, 80)->url() ?> 150w"
            src="<?= $image->crop(150, 200, 80)->url() ?>"
            sizes="(max-width: 640px) 100vw, 18em"
            alt=""/>
    </div>
<?php else: ?>
    <div class="c-figure__img u-artwork" style="background-image: url(<?= $image->crop(3, 2)->dataUri() ?>)">
        <img
            srcset="<?= $image->crop(1200, 800, 80)->url() ?> 1280w, <?= $image->crop(600, 400, 80)->url() ?> 640w, <?= $image->crop(300, 200, 80)->url() ?> 320w"
            src="<?= $image->crop(300, 200, 80)->url() ?>"
            sizes="100vw"
            alt=""/>
    </div>
<?php endif ?>
<?php if (!$image->caption()->empty()): ?>
    <figcaption class="c-figure__caption">
        <?= smartypants(kirbytext($image->caption())) ?>
    </figcaption>
<?php endif ?>
</figure>
