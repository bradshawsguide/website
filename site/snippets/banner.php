<header class="c-banner" id="top">
    <b-dialog-toggle target="search" hidden>
        <?php snippet('icon', ['glyph' => 'search']) ?>
        <span class="u-hidden-upto-medium">Search</span>
    </b-dialog-toggle>
<?php if (!$page->isHomePage()): ?>
    <a href="<?= url() ?>" rel="home">
        Bradshaw’s<span class="u-hidden-upto-medium"> Guide</span>
    </a>
<?php endif ?>
    <b-dialog-toggle target="navigation" action="showModal" hidden>
        <?php snippet('icon', ['glyph' => 'navigation']) ?>
        <span class="u-hidden-upto-medium">Menu</span>
    </b-dialog-toggle>
</header>
