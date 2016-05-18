<section class="c-section c-section--country">
  <h1 class="c-section__title">
    <a href="<?= $country->url() ?>"><?= smartypants($country->title()) ?></a>
  </h1>
  <?
    pattern('common/list', array(
      'items' => $country->children()
    ));
  ?>
</section>
