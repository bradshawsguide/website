<header class="c-page__header">
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
  <h2 class="c-page__subtitle">
    <?= smartypants($subtitle) ?>
  </h2>
<? endif ?>
</header>
