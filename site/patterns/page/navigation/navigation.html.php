<?
if ($page->type() == 'child') {
  $items = $page->siblings()->visible();
  $firstItem = $page->parent();
} else {
  $items = $page->children()->visible();
  $firstItem = $page;
}
?>

<?
// $site->activePage()
// $page->uri()
?>

<? if($items && $items->count()): ?>
<nav class="c-page__navigation" role="navigation">
  <a class="c-page__navigation-item"<? e($page->isActive(), ' aria-current="page"') ?> href="<?= $firstItem->url() ?>"><?= smartypants($firstItem->title()) ?></a>
<? foreach($items as $item): ?>
  <a class="c-page__navigation-item"<? e($item->isActive(), ' aria-current="page"') ?> href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
<? endforeach ?>
</nav>
<? endif ?>
