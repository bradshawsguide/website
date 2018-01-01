<header class="c-banner" id="top">
    <a class="c-banner__skip" href="#main">Skip to content</a>
<?php if (!$page->isHomePage()): ?>
    <p class="c-banner__title">
        <a class="c-banner__home" href="<?= url() ?>" rel="home">
            Bradshaw’s <span>Guide</span>
        </a>
    </p>
<?php endif ?>
    <button class="c-banner__toggle" aria-controls="search" aria-expanded="false">
        <?php pattern('common/icon', [
            'glyph' => 'search'
        ]) ?>
        <span class="c-banner__label">Search</span>
    </button>
    <button class="c-banner__toggle" aria-controls="navigation" aria-expanded="false">
        <?php pattern('common/icon', [
            'glyph' => 'navigation'
        ]) ?>
        <span class="c-banner__label">Menu</span>
    </button>
</header>
