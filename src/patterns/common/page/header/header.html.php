<header class="<?= classList('c-page__header', $modifiers) ?>">
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
