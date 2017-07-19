<section class="c-section c-section--country">
  <h1 class="c-section__title">
    <?= html::a($country->url(), smartypants($country->title())) ?>
  </h1>
  <?
    pattern('common/list', [
      'items' => $country->children(),
      'modifiers' => ['columns']
    ]);
  ?>
</section>
