<header class="c-page__header">
<? if (isset($parent)): ?>
  <nav class="c-page__parent">
    <?= smartypants($parent) ?>
  </nav>
<? endif ?>
  <h1 class="c-page__title">
    <?= smartypants($p->title()) ?>
    <? if ($p->notes()->isNotEmpty()): ?>
      <span><?= $p->notes() ?></span>
    <? endif ?>
  </h1>
<? if ($p->description()->isNotEmpty()): ?>
  <h2 class="c-page__description">
    <?= smartypants($p->description()) ?>
  </h2>
<? endif ?>
</header>
