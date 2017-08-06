<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => $page->parent(),
    'title' => $page->title()
  ]);

  pattern('section/featured', [
    'title' => 'Featured stations',
    'items' => $featured
  ]);

  pattern('section/list', [
    'title' => 'Counties',
    'items' => $page->children()->visible()
  ]);
?>
</section>

<? snippet('foot') ?>
