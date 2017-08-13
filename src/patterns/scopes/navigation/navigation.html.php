<? if(count($items)): ?>
<nav class="s-navigation" role="navigation">
<? foreach($items->visible() as $item): ?>
  <? $title = (!$item->title_short()->empty()) ? $item->title_short() : $item->title(); ?>
  <a href="<?= $item->url() ?>"<? e($item->isActive(), ' aria-current="page"') ?>><?= smartypants($title) ?></a>
<? endforeach ?>
</nav>
<? endif ?>
