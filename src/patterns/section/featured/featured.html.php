<? if(count($items)): ?>
<section class="c-section">
  <h1 class="c-section__title"><?= $title ?></h1>
  <div class="c-section__main c-section__main--grid">
  <?
    foreach($items as $item) {
      pattern('common/card', [
        'item' => $item
      ]);
    };
  ?>
  </div>
</section>
<? endif ?>
