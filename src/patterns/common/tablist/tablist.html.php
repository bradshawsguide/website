<nav class="c-tablist" aria-label="<?= $title ?>">
    <ul class="c-tablist__items">
<?php foreach (sections() as $section): ?>
        <li class="c-tablist__item">
            <a href="<?= $section['url'] ?>?view=<?= get('view') ?>" aria-label="<?= $section['label'] ?>"<?php e($currentURL == $section['url'], ' aria-current="page"') ?>><?= $section['title'] ?></a>
        </li>
<?php endforeach ?>
    </ul>
</nav>
