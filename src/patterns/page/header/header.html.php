<?
  if(isset($modifiers)) {
    $mods = implode(preg_filter('/^/', ' c-page__header--', $modifiers));
  }
?>
<header class="c-page__header<?= $mods ?? '' ?>">
<? if (isset($parent)): ?>
  <nav class="c-page__parent">
    <?= smartypants($parent) ?>
  </nav>
<? endif ?>
  <h1 class="c-page__title">
    <?= smartypants($p->title()) ?>
    <? if ($p->title_suffix()->isNotEmpty()): ?>
      <span><?= $p->title_suffix() ?></span>
    <? endif ?>
  </h1>
<? if (isset($subtitle)): ?>
  <p class="c-page__subtitle">
    <?= smartypants($subtitle) ?>
  </p>
<? endif ?>
</header>
