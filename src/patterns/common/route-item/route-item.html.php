<article class="c-route-item">
    <h2 class="c-route-item__label"><?= html::a($item->url(), $item->shortTitle()) ?></h2>
    <?php if (!$item->subtitle()->empty()): ?><p class="c-route-item__desc"><?= $item->subtitle() ?></p><?php endif ?>
</article>
