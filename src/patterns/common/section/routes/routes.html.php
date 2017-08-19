<? if(count($items)): ?>
  <section class="c-section">
    <?= brick('h'.(isset($level) ? $level : 2))->html($title)->attr('class', 'c-section__title') ?>
    <?
      pattern('common/route-list', [
        'routes' => $items
      ])
    ?>
  </section>
<? endif ?>
