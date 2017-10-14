<?php
    if (isset($modifiers)) {
        $mods = implode(preg_filter('/^/', ' c-page__header--', $modifiers));
    }
?>
<header class="c-page__header<?= $mods ?? '' ?>">
    <div class="c-page__header-inset">
    <?php if (isset($parent)): ?>
        <nav class="c-page__parent"><?= html::a($parent->url(), smartypants($parent->title())) ?></nav>
    <?php endif ?>
        <h2 class="c-page__title"><?= smartypants($title) ?></h2>
    <?php if (isset($subtitle)): ?>
        <p class="c-page__subtitle"><?= $subtitle ?></p>
    <?php endif ?>
    </div>
</header>
