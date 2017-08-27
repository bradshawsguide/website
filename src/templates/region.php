<? snippet('head') ?>

<article class="c-page">
<?
  $mods = $page->hasImages() ? 'poster' : null;
  pattern('common/page/header', [
    'title' => $page->title(),
    'parent' => $page->parent(),
    'modifiers' => [$mods]
  ]);

  pattern('common/page/content');

  if (count($page->featured())) {
    pattern('common/section/featured', [
      'title' => 'Featured stations',
      'items' => $page->featured()
    ]);
  };

  pattern('common/section/list', [
    'title' => 'Stations in '.$page->title(),
    'items' => page('stations')->children()->filterBy('region', $page->uid())
  ]);
?>
</article>

<? snippet('foot') ?>
