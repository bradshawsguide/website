<? snippet('head') ?>

<div class="c-page">
<?
  pattern('scopes/prose', [
    'content' => $page->introduction()
  ]);

  foreach(page('sections')->children() as $section) {
    $featured = page('sections/'.$section->dirname())->feature()->yaml();

    array_walk($featured, function(&$value, $key) {
      $value = page('stations/'.$value);
    });

    pattern('common/section/featured', [
      'title' => html::a('/routes/section:'.$section->dirname(), $section->title()),
      'content' => $section->subtitle(),
      'items' => $featured
    ]);
  }
?>
</div>

<? snippet('foot') ?>
