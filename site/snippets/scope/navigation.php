<nav class="s-navigation u-pull-right" role="navigation">
<?php foreach ($items->listed() as $item): ?>
    <?php $title = ($item->title_short()->isNotEmpty()) ? $item->title_short() : $item->title(); ?>
    <a href="<?= $item->url() ?>"<?php e($item->isActive(), ' aria-current="page"') ?>><?= smartypants($title) ?></a>
<?php endforeach ?>
</nav>
