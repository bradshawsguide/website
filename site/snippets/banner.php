<header class="c-banner" id="top">
    <b-dialog-toggle target="search" hidden>
        <b-icon name="search"></b-icon>
        <b-visually-hidden>Search</b-visually-hidden>
    </b-dialog-toggle>
<?php if (!$page->isHomePage()): ?>
    <a href="<?= url() ?>" rel="home">
        Bradshaw’s<b-visually-hidden> Guide</b-visually-hidden>
    </a>
<?php endif ?>
    <b-dialog-toggle target="navigation" action="showModal" hidden>
        <b-icon name="menu"></b-icon>
        <b-visually-hidden>Menu</b-visually-hidden>
    </b-dialog-toggle>
</header>
