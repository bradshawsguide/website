<header class="c-banner<?php e($page->isHomePage(), ' c-banner--home') ?>">
    <p class="c-banner__title">
    <?php if ($page->isHomePage()): ?>
        <span class="c-banner__masthead">
            <span>Bradshaw’s Guide</span>
            <span>for tourists in</span>
            <span>Great Britain and&#160;Ireland</span>
        </span>
    <?php else: ?>
        <a class="c-banner__homelink" href="<?= url() ?>" rel="home">
            Bradshaw’s <span class="u-hidden@small">Guide</span>
        </a>
    <?php endif ?>
    </p>
    <?php if ($page->isHomePage()): ?>
        <p class="c-banner__edition">1866 Edition</p>
    <?php endif ?>
</header>
