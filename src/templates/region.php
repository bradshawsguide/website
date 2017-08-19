<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/page/header', [
    'parent' => $page->parent(),
    'title' => $page->title()
  ]);

  pattern('common/page/content');

  if (count($featured)) {
    pattern('common/section/featured', [
      'title' => 'Featured stations',
      'items' => $featured
    ]);
  }

  pattern('common/section/list', [
    'title' => 'Stations in '.$page->title(),
    'items' => page('stations')->children()->filterBy('region', $page->uid())
  ]);

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
