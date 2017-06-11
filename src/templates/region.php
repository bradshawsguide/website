<? snippet('head') ?>

<article class="c-page">
<?
  $regionUrl = $page->parent()->url();
  $regionTitle = $page->parent()->title();

  pattern('page/header', [
    'p' => $page,
    'parent' => html::a($regionUrl, $regionTitle),
  ]);

  pattern('page/content', [
    'p' => $page
  ]);

  pattern('section/featured', [
    'title' => 'Featured stations',
    'items' => page('stations')->children()->filterBy('region', $page->uid())->filter(function($page) {
      return $page->hasImages();
    })
  ]);

  pattern('section/list', [
    'title' => 'All stations',
    'items' => page('stations')->children()->filterBy('region', $page->uid())
  ]);

  pattern('page/footer', [
    'p' => $page
  ]);
?>
</article>

<? snippet('foot') ?>
