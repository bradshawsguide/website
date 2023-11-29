<header class="c-banner" id="top">
    <b-toggle target="search" icon="search" label="Search"></b-toggle>
<?php if (!$page->isHomePage()): ?>
    <a href="<?= url() ?>" rel="home">
        Bradshaw’s<b-visually-hidden> Guide</b-visually-hidden>
    </a>
<?php endif; ?>
    <b-toggle target="navigation" action="showModal" icon="menu" label="Menu"></b-toggle>
</header>
