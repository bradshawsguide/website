<b-dialog class="c-navigation" id="navigation" aria-labelledby="navigation-title">
    <b-dialog-toggle class="c-navigation__toggle" action="close" hidden>
        <b-icon name="close"></b-icon>
        <b-visually-hidden>Close menu</b-visually-hidden>
    </b-dialog-toggle>

    <nav class="c-navigation__container">
        <h2 id="navigation-title">Explore <?= $site->title() ?></h2>
        <ul>
        <?php foreach($site->children()->listed() as $item): ?>
            <li>
                <a href="<?= $item->url() ?>"<?php e($item->isOpen(), ' aria-current="page"') ?>>
                    <?= smartypants($item->title()) ?>
                </a>
            </li>
        <?php endforeach ?>
        </ul>
    </nav>
</b-dialog>
