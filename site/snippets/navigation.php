<dialog open class="c-navigation" id="navigation" aria-labelledby="navigation-title">
    <b-toggle action="close" icon="close" label="Close menu"></b-toggle>
    <nav class="c-navigation__container">
        <h2 id="navigation-title">Explore <?= $site->title() ?></h2>
        <ul>
            <?php foreach ($site->children()->listed() as $item): ?>
                <li>
                    <a href="<?= $item->url() ?>"
                        <?= ariacurrent($item->isOpen()) ?>>
                        <?= kti($item->title()) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</dialog>
<script>document.querySelector("#navigation").close()</script>
