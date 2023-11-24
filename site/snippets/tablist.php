<nav class="c-tablist" aria-label="<?= $title ?>">
    <ul class="c-tablist__items">
<?php foreach ($tabs as $tab): ?>
        <li class="c-tablist__item">
            <?php
                $uri = $page->url().'/';
                $param = $paramName.':'.$tab->uid();
                $view = get('view') ? '?view='.get('view') : '';
                $href = $uri.$param.$view;
            ?>
            <a href="<?= $href ?>" aria-label="<?= $tab->label() ?>"<?php e(param($paramName) == $tab->uid(), ' aria-current="page"') ?>><?= $tab->title() ?></a>
        </li>
<?php endforeach ?>
    </ul>
</nav>
