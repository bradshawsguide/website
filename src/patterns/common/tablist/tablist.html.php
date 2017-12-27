<nav class="c-tablist">
<?php foreach (sections() as $section): ?>
    <?php
        $currentURL = '/routes/section:'.param('section');
        $currentView = $section['url'];
        $current = ($currentURL == $currentView) ? 'aria-current="page"': null;
    ?>
    <a class="c-tablist__item" href="<?= $section['url'] ?>?view=<?= get('view') ?>" aria-label="<?= $section['label'] ?>" <?= $current ?>>
        <?= $section['title'] ?>
    </a>
<?php endforeach ?>
</nav>
