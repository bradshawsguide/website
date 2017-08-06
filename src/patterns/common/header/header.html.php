<?
  if(isset($modifiers)) {
    $mods = implode(preg_filter('/^/', ' c-header--', $modifiers));
  }
?>
<header class="c-header<?= $mods ?? '' ?>">
<? if (isset($parent)): ?>
  <nav class="c-header__parent">
    <?= html::a($parent->url(), smartypants($parent->title())) ?>
  </nav>
<? endif ?>
  <h1 class="c-header__title">
    <?= smartypants($title) ?>
    <? if (isset($suffix)): ?>
      <span><?= $suffix ?></span>
    <? endif ?>
  </h1>
<? if (isset($subtitle)): ?>
  <p class="c-header__subtitle">
    <?= smartypants($subtitle) ?>
  </p>
<? endif ?>
</header>
