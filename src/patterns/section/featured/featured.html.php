<?
  if(isset($modifiers)) {
    $mods = implode(preg_filter('/^/', ' c-section--', $modifiers));
  }

  if(isset($url)) {
    $title = html::a($url, $title);
  }
?>
<section class="c-section<?= $mods ?? '' ?>">
  <header class="c-section__header">
    <h1 class="c-section__title"><?= $title ?></h1>
  </header>

  <div class="c-section__main">
  <? if(isset($items)): ?>
    <ul class="c-list c-list--grid">
    <? foreach($items as $item):?>
      <li class="c-list__item">
        <? pattern('common/card', [
          'item' => $item
        ]); ?>
      </li>
    <? endforeach ?>
    </ul>
  <? else: ?>
    <div class="s-prose">
      <p><?= smartypants($noresult) ?></p>
    </div>
  <? endif ?>
  </div>
</section>
