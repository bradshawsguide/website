<nav class="c-traverse">
    <?php
        snippet('title', [
            'title' => Html::a($page->parent()->url(), $page->parent()->title()),
            'level' => $level ?? 2,
            'class' => 'c-traverse__title'
        ]);
    ?>
    <ul class="c-traverse__items">
<?php if ($page->hasPrev()): ?>
        <li class="c-traverse__item c-traverse__item--prev">
            <a rel="prev" href="<?= $page->prev()->url() ?>">
                <span aria-label="Previous">&#9756;</span>
                <span class="c-traverse__label u-hidden-upto-medium"><?= smartypants($page->prev()->shortTitle()) ?></span>
            </a>
        </li>
<?php endif ?>
<?php if ($page->hasNext()): ?>
        <li class="c-traverse__item c-traverse__item--next">
            <a rel="next" href="<?= $page->next()->url() ?>">
                <span aria-label="Next">&#9758;</span>
                <span class="c-traverse__label u-hidden-upto-medium"><?= smartypants($page->next()->shortTitle()) ?></span>
            </a>
        </li>
<?php endif ?>
    </ul>
</nav>
