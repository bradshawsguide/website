<nav class="c-switch" aria-label="<?= $title ?>">
    <ul>
<?php foreach ($switches as $switch):
    $href = '?'.$queryName.'='.$switch['uid'];
?>
        <li><?=
            Html::tag('a', $switch['label'], [
                'href' => $href,
                'aria-current' => get($queryName) == $switch['uid']
                    ? 'page'
                    : false
            ])
        ?></li>
<?php endforeach ?>
    </ul>
</nav>
