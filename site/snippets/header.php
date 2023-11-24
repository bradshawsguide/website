<header class="<?= classList('c-header', $modifiers ?? null) ?>">
<?php if (isset($parent)): ?>
    <nav class="c-header__parent">
        <?= $parent ?>
    </nav>
<?php endif ?>
<?php if (isset($pretitle)): ?>
    <p class="c-header__pretitle">
        <?= $pretitle ?>
    </p>
<?php endif ?>
    <?php
        snippet('title', [
            'title' => $title ?? $page->title(),
            'level' => $level ?? 1,
            'class' => 'c-header__title'
        ]);
    ?>
<?php if (isset($subtitle)): ?>
    <p class="c-header__subtitle"><?= $subtitle ?></p>
<?php endif ?>
</header>
