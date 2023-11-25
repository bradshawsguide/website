<nav class="c-traverse" id="traverse" aria-labelledby="traverse-title">
    <?php
        snippet('title', [
            'title' => Html::a($page->parent()->url(), $page->parent()->title()),
            'level' => $level ?? 2,
            'id' => 'traverse-title'
        ]);
    ?>

    <ul>
<?php if ($page->hasPrev()): ?>
        <li>
            <a rel="prev" href="<?= $page->prev()->url() ?>">
                <b-icon name="prev"></b-icon>
                <b-visually-hidden><?=
                    smartypants($page->prev()->shortTitle())
                ?></b-visually-hidden>
            </a>
        </li>
<?php endif ?>
<?php if ($page->hasNext()): ?>
        <li>
            <a rel="next" href="<?= $page->next()->url() ?>">
                <b-icon name="next"></b-icon>
                <b-visually-hidden><?=
                    smartypants($page->next()->shortTitle())
                ?></b-visually-hidden>
            </a>
        </li>
<?php endif ?>
    </ul>
</nav>
