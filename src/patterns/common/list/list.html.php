<? if($items && $items->count()): ?>
<ul class="c-list">
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
