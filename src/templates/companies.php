<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/header', [
    'parent' => page('explore'),
    'title' => $page->title()
  ]);

  pattern('common/list', [
    'items' => $page->children()->visible()
  ]);
?>
</section>

<? snippet('foot') ?>
