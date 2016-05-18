<?
if ($page->type() == 'child') {
  $items = $page->siblings()->visible();
  $firstItem = $page->parent();
} else {
  $items = $page->children()->visible();
  $firstItem = $page;
}

if($items && $items->count()): ?>
  <nav role="navigation">
    <a<? e($page->isOpen(), ' class="is-active"') ?> href="<?= $firstItem->url() ?>"><?= smartypants($firstItem->title()) ?></a>
  <? foreach($items as $item): ?>
    <a<? e($page->isOpen(), ' class="is-active"') ?> href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
  <? endforeach ?>
  </nav>
<? endif ?>
