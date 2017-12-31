<figure class="c-figure c-figure--cover">
    <div class="c-figure__container">
        <div class="c-figure__img u-artwork" style="background-image: url(<?= $image->crop(7, 4)->dataUri() ?>)">
            <img
                srcset="<?= $image->crop(1280, 720, 80)->url() ?> 1280w, <?= $image->crop(640, 360, 80)->url() ?> 640w, <?= $image->crop(320, 180, 80)->url() ?> 320w"
                src="<?= $image->crop(320, 180, 80)->url() ?>"
                sizes="100vw"
                alt="">
        </div>
    </div>
<?php if (!$image->caption()->empty()): ?>
    <figcaption class="c-figure__caption">
        <?= smartypants(kirbytext($image->caption())) ?>
    </figcaption>
<?php endif ?>
</figure>
