<? if(count($items)): ?>
  <section class="c-section">
    <h1 class="c-section__title"><?= $title ?></h1>
    <?
      pattern('common/list', [
        'items' => $items,
        'modifiers' => ['columns']
      ]);
    ?>
  </section>
<? endif ?>
