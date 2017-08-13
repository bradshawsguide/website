<?
  if(isset($modifiers)) {
    $mods = implode(preg_filter('/^/', ' c-page__header--', $modifiers));
  }
?>
<header class="c-page__header<?= $mods ?? '' ?>">
  <div class="c-page__header-inset">
  <? if(isset($parent) && !$parent->empty()): ?>
    <nav class="c-page__parent"><?= html::a($parent->url(), smartypants($parent->title())) ?></nav>
  <? endif ?>
    <h2 class="c-page__title"><?= smartypants($title) ?></h2>
  <? if(isset($subtitle) && !$subtitle->empty()): ?>
    <p class="c-page__subtitle"><?= smartypants($subtitle) ?></p>
  <? endif ?>
  </div>
</header>
