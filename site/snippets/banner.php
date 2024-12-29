<header class="c-banner" id="top">
    <?php if ($page->isHomePage()): ?>
        <div>
            <h1>
                <span>Bradshaw’s Guide</span>
                <span>for tourists in</span>
                <span>Great Britain and&nbsp;Ireland</span>
            </h1>
            <p>1866 Edition</p>
        </div>
    <?php else: ?>
        <a href="<?= url() ?>" rel="home">
            Bradshaw’s<b-visually-hidden> Guide</b-visually-hidden>
        </a>
    <?php endif; ?>

    <?php snippet("navigation"); ?>

    <b-toggle target="search" icon="search" label="Search"></b-toggle>

    <?php snippet("search"); ?>
</header>
