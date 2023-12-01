<article class="c-collection">
    <h3>
        <a href="<?= "/routes/section:{$item->uid()}" ?>"
            aria-label="<?= $item->label() ?>">
            <?= kti($item->title()) ?><b-icon name="next"></b-icon>
        </a>
    </h3>

    <div class="s-text">
        <p><?= $item->desc() ?></p>
        <?php if ($routesCount = size($item->routes())): ?>
            <p>
                <a href="<?= "/routes/section:{$item->uid()}" ?>">
                    <b><?= $routesCount ?> routes</b>
                </a>
            </p>
        <?php endif; ?>
    </div>
</article>
