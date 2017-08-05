<?
if ($p->type() == 'child') {
  $items = $p->siblings()->visible();
  $firstItem = $p->parent();
} else {
  $items = $p->children()->visible();
  $firstItem = $p;
}
?>

<? if(count($items)): ?>
<nav class="c-page__navigation" role="navigation">
  <a class="c-page__navigation-item"<? e($p->isActive(), ' aria-current="page"') ?> href="<?= $firstItem->url() ?>"><?= smartypants($firstItem->title()) ?></a>
<? foreach($items as $item): ?>
  <a class="c-page__navigation-item"<? e($item->isActive(), ' aria-current="page"') ?> href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
<? endforeach ?>
</nav>
<? endif ?>
