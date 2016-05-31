<header class="c-page__header">
  <h1 class="c-page__title"><?= smartypants($p->title()) ?></h1>
<? if (isset($notes)): ?>
  <p class="c-page__notes"><?= smartypants($notes) ?></p>
<? endif ?>
<? if (isset($subtitle)): ?>
  <h2 class="c-page__subtitle"><?= $subtitle ?></h2>
<? endif ?>
</header>
