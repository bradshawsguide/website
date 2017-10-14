<figure class="c-figure<?= (isset($class)) ? ' c-figure--'.$class : null; ?>">
    <iframe class="c-figure__map" src="/map?geojson=<?= $url ?>"></iframe>
<?php if (isset($caption)): ?>
    <figcaption class="c-figure__caption">
        <?= smartypants(kirbytext($caption)) ?>
    </figcaption>
<?php endif ?>
</figure>
