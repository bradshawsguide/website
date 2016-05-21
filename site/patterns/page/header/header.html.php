<header class="c-page__header">
  <h1 class="c-page__title"><?= smartypants($p->title()) ?></h1>
  <? if ($p->notes()): ?>
    <p class="c-page__notes"><?= smartypants($p->notes()) ?></p>
  <? endif ?>
</header>
