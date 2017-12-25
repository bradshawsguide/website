<nav class="c-traversal-nav">
    <h1 class="c-traversal-nav__title">
        <a rel="up" href="<?= $page->parent()->url() ?>">
            <?= smartypants($page->parent()->title()) ?>
        </a>
    </h1>

<?php if ($page->hasPrev()): ?>
    <a class="c-traversal-nav__item" rel="prev" href="<?= $page->prev()->url() ?>" aria-label="Previous: <?= $page->prev()->title() ?>">
        <?= smartypants($page->prev()->shortTitle()) ?>
    </a>
<?php endif ?>
<?php if ($page->hasNext()): ?>
    <a class="c-traversal-nav__item" rel="next" href="<?= $page->next()->url() ?>" aria-label="Next: <?= $page->next()->title() ?>">
        <?= smartypants($page->next()->shortTitle()) ?>
    </a>
<?php endif ?>
</nav>
