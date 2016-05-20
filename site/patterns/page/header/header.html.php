<?
  if ($page->type() == 'child'):
    $title = (isset($title)) ? $title : $page->parent()->title();
  else:
    $title = (isset($title)) ? $title : $page->title();
  endif;

  $notes = (isset($notes)) ? $notes : $page->notes();
?>
<header class="c-page__header">
  <h1 class="c-page__title"><?= smartypants($title) ?></h1>
  <? if ($page->notes()): ?>
    <p class="c-page__notes"><?= smartypants($notes) ?></p>
  <? endif ?>
</header>
