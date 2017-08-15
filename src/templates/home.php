<? snippet('head') ?>

<div class="c-page">
<?
  foreach(page('sections')->children() as $section) {
    pattern('common/section/featured', [
      'title' => html::a('/routes/section:'.$section->dirname(), $section->title()),
      'content' => $section->subtitle(),
      'items' => page('stations')->children()->filterBy('section', $section->dirname())->filter(function($page) {
        return $page->hasImages();
      })->limit(3)
    ]);
  }
?>
</div>

<? snippet('foot') ?>
