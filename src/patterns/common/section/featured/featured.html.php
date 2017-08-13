<section class="c-section">
  <? $level = isset($level) ? $level : 2; ?>
  <?= brick('h'.$level)->html($title)->attr('class', 'c-section__title') ?>
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
  <? else:
    pattern('scope/prose', [
      'content' => $noresult
    ]);
  endif ?>
</section>
