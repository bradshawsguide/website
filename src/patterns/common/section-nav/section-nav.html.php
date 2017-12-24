<nav class="c-section-nav">
<?php foreach (sections() as $section): ?>
    <?php
        $currentURL = '/routes/section:'.param('section');
        $currentView = $section['url'];
        $current = ($currentURL == $currentView) ? 'aria-current="page"': null;
    ?>
    <a class="c-section-nav__item" href="<?= $section['url'] ?>?view=<?= get('view') ?>" aria-label="<?= $section['label'] ?>" <?= $current ?>>
        <?= $section['title'] ?>
    </a>
<?php endforeach ?>
</nav>
