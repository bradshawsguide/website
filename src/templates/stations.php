<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', [
    'p' => $page,
    'parent' => page('explore')
  ]);

  pattern('section/index', [
    'items' => $page->children()->visible()
  ]);
?>
</section>

<? snippet('foot') ?>
