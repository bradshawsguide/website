<nav class="c-traversal-nav">
    <h1 class="c-traversal-nav__title">
        <a rel="up" href="<?= $parent->url() ?>">
            <?= smartypants($parent->title()) ?>
        </a>
    </h1>

    <?php if (isset($prev)): ?>
        <a class="c-traversal-nav__prev" rel="prev" href="<?= $prev->url() ?>" aria-label="Previous: <?= $prev->title()?>">
            <?= smartypants($prev->title()) ?>
        </a>
    <?php endif ?>
    <?php if (isset($next)): ?>
        <a class="c-traversal-nav__next" rel="next" href="<?= $next->url() ?>" aria-label="Next: <?= $next->title()?>">
            <?= smartypants($next->title()) ?>
        </a>
    <?php endif ?>
</nav>
