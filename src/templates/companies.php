<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/header', [
    'p' => $page,
    'parent' => page('explore'),
  ]);

  pattern('common/list', [
    'items' => $page->children()->visible()
  ]);
?>
</section>

<? snippet('foot') ?>
