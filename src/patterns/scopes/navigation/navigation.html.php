<nav class="s-navigation" role="navigation">
<?php foreach ($items->visible() as $item): ?>
    <?php $title = (!$item->title_short()->empty()) ? $item->title_short() : $item->title(); ?>
    <a href="<?= $item->url() ?>"<?php e($item->isActive(), ' aria-current="page"') ?>><?= smartypants($title) ?></a>
<?php endforeach ?>
</nav>
