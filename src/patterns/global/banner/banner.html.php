<header class="c-banner" id="top">
    <a class="c-banner__skip" href="#main">Skip to content</a>
    <p class="c-banner__title">
        <a class="c-banner__home" href="<?= url() ?>" rel="home">
            Bradshaw’s <span>Guide</span>
        </a>
    </p>
    <button class="c-banner__toggle" aria-controls="search" aria-expanded="false">
        <span>
            <?php pattern('common/icon', [
                'glyph' => 'search'
            ]) ?>
            Search
        </span>
    </button>
    <button class="c-banner__toggle" aria-controls="navigation" aria-expanded="false">
        <span>
            <?php pattern('common/icon', [
                'glyph' => 'search'
            ]) ?>
            Menu
        </span>
    </button>
</header>
