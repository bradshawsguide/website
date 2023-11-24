<header class="c-banner" id="top">
    <b-dialog-toggle target="search" hidden>
        <?php snippet('icon', ['glyph' => 'search']) ?>
        <b-visually-hidden>Search</b-visually-hidden>
    </b-dialog-toggle>
<?php if (!$page->isHomePage()): ?>
    <a href="<?= url() ?>" rel="home">
        Bradshaw’s<b-visually-hidden> Guide</b-visually-hidden>
    </a>
<?php endif ?>
    <b-dialog-toggle target="navigation" action="showModal" hidden>
        <?php snippet('icon', ['glyph' => 'navigation']) ?>
        <b-visually-hidden>Menu</b-visually-hidden>
    </b-dialog-toggle>
</header>
