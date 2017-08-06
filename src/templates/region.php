<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/page/header', [
    'parent' => $page->parent(),
    'title' => $page->title()
  ]);

  pattern('common/page/content');

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

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
