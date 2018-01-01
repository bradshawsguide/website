<header class="<?= classList('c-header', $modifiers) ?>">
<?php if ($parent): ?>
    <nav class="c-header__parent">
        <?= $parent ?>
    </nav>
<?php endif ?>
<?php if (isset($pretitle)): ?>
    <p class="c-header__pretitle">
        <?= $pretitle ?>
    </p>
<?php endif ?>
    <?= brick('h'.$level)->html(smartypants($title))->addClass('c-header__title') ?>
<?php if ($subtitle): ?>
    <p class="c-header__subtitle"><?= $subtitle ?></p>
<?php endif ?>
</header>
