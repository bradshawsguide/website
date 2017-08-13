<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('explore'),
    'title' => $page->title()
  ]);

  foreach($countries as $country) {
    pattern('common/section/list', [
      'title' => html::a($country->url(), smartypants($country->title())),
      'items' => $country->children()
    ]);
  }
?>
</section>

<? snippet('foot') ?>
