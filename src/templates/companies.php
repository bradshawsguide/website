<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('places'),
    'title' => $page->title()
  ]);

  pattern('common/list', [
    'items' => $page->children()->visible()
  ]);
?>
</section>

<? snippet('foot') ?>
