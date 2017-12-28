<nav class="c-switch" aria-lable="<?= $title ?>">
    <ul class="c-switch__items">
<?php foreach ($switches as $switch): ?>
        <li class="c-switch__item">
            <?php
                $href = '?'.$queryName.'='.$switch['uid'];
            ?>
            <a href="<?= $href ?>"<?php e(get($queryName) == $switch['uid'], ' aria-current="page"') ?>>
                <?= $switch['label'] ?>
            </a>
        </li>
<?php endforeach ?>
    </ul>
</nav>
