<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', [
    'p' => $page,
    'parent' => $page->parent()
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

  pattern('common/traverse', [
    'p' => $page
  ]);
?>
</article>

<? snippet('foot') ?>
