<header class="c-banner<?php e($page->isHomePage(), ' c-banner--home') ?>">
<?php if ($page->isHomePage()): ?>
    <h1 class="c-banner__masthead">
        <span>Bradshaw’s Guide</span>
        <span>for tourists in</span>
        <span>Great Britain and&#160;Ireland</span>
    </h1>
<?php else: ?>
    <p class="c-banner__title">
        <a class="c-banner__homelink" href="<?= url() ?>" rel="home">
            Bradshaw’s <span>Guide</span>
        </a>
    </p>
<?php endif ?>
<?php if ($page->isHomePage()): ?>
    <p class="c-banner__edition">1866 Edition</p>
<?php endif ?>
</header>
