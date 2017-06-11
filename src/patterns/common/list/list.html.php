<? if(count($items)): ?>
<?
  if (isset($modifiers)) {
    $mods = '';
    foreach($modifiers as $modifier) {
      $mods .= ' c-list--'.$modifier;
    }
  }
?>
<ul class="c-list<?= $mods ?>">
  <? foreach($items->sortby('title') as $item):
      if (!$item->title_short()->empty()) {
        $title = $item->title_short();
      } else {
        $title = $item->title();
      };
  ?>
  <li class="c-list__item">
    <?= html::a($item->url(), smartypants($title)) ?>
  </li>
  <? endforeach ?>
</ul>
<? endif ?>
