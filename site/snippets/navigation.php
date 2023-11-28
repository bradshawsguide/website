<dialog open class="c-navigation" id="navigation" aria-labelledby="navigation-title">
    <b-toggle action="close" icon="close" label="Close menu"></b-toggle>

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
</dialog>
<script>document.querySelector("#navigation").open = false</script>
