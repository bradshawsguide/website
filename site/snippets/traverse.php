<nav class="c-traverse" aria-labelledby="traverse-title">
    <h2 id="traverse-title">
        <a href="<?= $page->parent()->url() ?>">
            <?= $page->parent()->title() ?>
        </a>
    </h2>
    <ul>
        <?php if ($page->hasPrev()): ?>
            <li>
                <a href="<?= $page->prev()->url() ?>" rel="prev">
                    <b-icon name="prev"></b-icon>
                    <b-visually-hidden><?= kti(
                        $page->prev()->shortTitle(),
                    ) ?></b-visually-hidden>
                </a>
            </li>
        <?php endif; ?>
        <?php if ($page->hasNext()): ?>
            <li>
                <a href="<?= $page->next()->url() ?>" rel="next">
                    <b-visually-hidden><?= kti(
                        $page->next()->shortTitle(),
                    ) ?></b-visually-hidden>
                    <b-icon name="next"></b-icon>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
