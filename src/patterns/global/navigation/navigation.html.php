<nav class="c-navigation" aria-label="Main navigation">
    <ul class="c-navigation__list">
    <?php foreach ($pages->find('places', 'routes') as $page): ?>
        <li class="c-navigation__item">
            <a href="<?= $page->url() ?>" aria-label="<?= $page->title() ?>"<?php e($page->isOpen(), ' aria-current="page"') ?>>
            <?= $page->title_short(); ?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
</nav>
