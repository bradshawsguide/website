<nav class="c-tablist" aria-label="<?= $title ?>">
    <ul>
        <?php foreach ($tabs as $tab):
            $url = "{$page->url()}/{$param}:{$tab->uid()}?view={$view}"; ?>
            <li>
                <a href="<?= $url ?>"
                    aria-label="<?= $tab->label() ?>"
                    <?= ariacurrent($tab->uid() == param($param)) ?>>
                    <?= $tab->title() ?>
                </a>
            </li>
        <?php
        endforeach; ?>
    </ul>
</nav>
