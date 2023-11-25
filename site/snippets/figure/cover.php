<figure class="c-figure c-figure--cover">
    <img class="c-figure__img"
        srcset="<?= $image->crop(1280, 720, 80)->url() ?> 1280w, <?= $image->crop(640, 360, 80)->url() ?> 640w, <?= $image->crop(320, 180, 80)->url() ?> 320w"
        src="<?= $image->crop(320, 180, 80)->url() ?>"
        sizes="100vw"
        alt="">
<?php if ($image->caption()): ?>
    <figcaption class="c-figure__caption">
        <?= kt($image->caption()) ?>
    </figcaption>
<?php endif ?>
</figure>
