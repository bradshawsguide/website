<nav class="c-tablist" aria-label="<?= $title ?>">
    <ul>
<?php foreach ($tabs as $tab):
    $uri = $page->url().'/';
    $param = $paramName.':'.$tab->uid();
    $view = get('view') ? '?view='.get('view') : '';
    $href = $uri.$param.$view;
?>
        <li><?=
            Html::a($href, $tab->title(), [
                'aria-current' => param($paramName) == $tab->uid()
                    ? 'page'
                    : false,
                'aria-label' => $tab->label()
            ])
        ?></li>
<?php endforeach ?>
    </ul>
</nav>
