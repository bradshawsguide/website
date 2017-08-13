<section class="c-section">
  <?= brick('h'.(isset($level) ? $level : 2))->html($title)->attr('class', 'c-section__title') ?>
  <?
    if(isset($content)):
      pattern('scopes/prose', [
        'content' => $content
      ]);
    endif
  ?>
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
  <? endif ?>
</section>
