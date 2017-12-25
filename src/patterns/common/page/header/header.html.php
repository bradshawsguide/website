<?php
    if (isset($modifiers)) {
        $mods = implode(preg_filter('/^/', ' c-page__header--', $modifiers));
    }
?>
<header class="c-page__header<?= $mods ?? '' ?>">
<?php if ($parent): ?>
    <nav class="c-page__parent">
        <?= $parent ?>
    </nav>
<?php endif ?>
    <h1 class="c-page__title">
        <?php if (isset($pretitle)): ?>
            <span class="c-page__pretitle">
                <?= $pretitle ?>
            </span>
        <?php endif ?>
        <?= smartypants($title) ?>
    </h1>
<?php if ($subtitle): ?>
    <p class="c-page__subtitle"><?= $subtitle ?></p>
<?php endif ?>
</header>
