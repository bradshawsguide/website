<nav class="c-navigation" aria-label="Explore <?= $site->title() ?>">
    <ul>
        <?php foreach (["places", "routes"] as $item): ?>
            <li>
                <a href="<?= $pages->find($item)->url() ?>"
                    <?= ariacurrent($pages->find($item)->isOpen()) ?>>
                    <?= kti($pages->find($item)->shortTitle()) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

