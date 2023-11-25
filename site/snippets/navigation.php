<b-dialog class="c-navigation" id="navigation" aria-labelledby="navigation-title">
    <b-dialog-toggle class="c-navigation__toggle" action="close" hidden>
        <b-icon name="close"></b-icon>
        <b-visually-hidden>Close menu</b-visually-hidden>
    </b-dialog-toggle>

    <nav class="c-navigation__container">
        <h2 id="navigation-title">Explore <?= $site->title() ?></h2>
        <ul>
<?php foreach($site->children()->listed() as $item): ?>
            <li><?=
                Html::a($item->url(), [kti($item->title())], [
                    'aria-current' => $item->isOpen()
                        ? 'page'
                        : false
                ])
            ?></li>
<?php endforeach ?>
        </ul>
    </nav>
</b-dialog>
