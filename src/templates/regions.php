<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', [
    'p' => $page,
    'parent' => page('explore')
  ]);

  foreach($countries as $country) {
    pattern('section/list', [
      'title' => html::a($country->url(), smartypants($country->title())),
      'items' => $country->children()
    ]);
  }
?>
</section>

<? snippet('foot') ?>
