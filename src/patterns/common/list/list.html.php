<? if(count($items)): ?>
<?
  if(isset($modifiers)) {
    $mods = implode(preg_filter('/^/', ' c-list--', $modifiers));
  }
?>
<ul class="c-list<?= $mods ?? '' ?>">
<? foreach($items->sortby('title') as $item): ?>
  <li class="c-list__item">
    <?= html::a($item->url(), smartypants($item->shortTitle())) ?>
  </li>
<? endforeach ?>
</ul>
<? endif ?>
