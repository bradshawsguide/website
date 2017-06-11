<? if($items && $items->count()): ?>
<section class="c-section c-section--stations">
  <h1 class="c-section__title"><?= $title ?></h1>
  <div class="c-section__main">
  <?
    pattern('common/list', [
      'items' => $items,
      'modifiers' => ['columns']
    ]);
  ?>
  </div>
</section>
<? endif ?>
