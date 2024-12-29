<nav class="c-tablist" aria-label="<?= $title ?>">
    <ul>
        <?php foreach ($tabs as $tab):
            if (isset($view)):
                $url = "{$page->url()}/{$tab->uid()}?view={$view}";
            else:
                $url = "{$page->url()}/{$tab->uid()}";
            endif; ?>
            <li>
                <a href="<?= $url ?>"
                    aria-label="<?= $tab->label() ?>"
                    <?= ariacurrent($tab->uid() == $uid) ?>>
                    <?= $tab->title() ?>
                </a>
            </li>
        <?php
        endforeach; ?>
    </ul>
</nav>
