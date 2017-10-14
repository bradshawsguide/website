<nav class="c-navigation" aria-label="Main navigation">
    <ul class="c-navigation__list">
    <?php foreach ($pages->find('search', 'places', 'routes') as $page): ?>
        <li class="c-navigation__item c-navigation__item--<?= str::lower($page->title_short()) ?>">
            <a href="<?= $page->url() ?>" aria-label="<?= $page->title() ?>"<?php e($page->isOpen(), ' aria-current="page"') ?>>
            <?php
                if ($page->uri() == 'search'):
                    pattern('common/icon', [
                        'glyph' => 'search'
                    ]);
                else:
                    echo $page->title_short();
                endif;
            ?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
</nav>
