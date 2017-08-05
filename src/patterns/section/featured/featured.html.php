<section class="c-section">
  <h1 class="c-section__title"><?= $title ?></h1>
  <? if(count($items)): ?>
  <ul class="c-list c-list--grid">
    <? foreach($items as $item):?>
    <li class="c-list__item">
      <?
        pattern('common/card', [
          'item' => $item
        ]);
      ?>
    </li>
    <? endforeach ?>
  </ul>
  <? else: ?>
    <?
      pattern('scope/prose', [
        'content' => $noresult
      ]);
    ?>
  <? endif ?>
</section>
