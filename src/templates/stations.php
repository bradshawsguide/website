<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', [
    'p' => $page,
    'parent' => html::a('/explore/', 'Explore'),
  ]);

  pattern('section/index', [
    'items' => $page->children()->visible()
  ]);
?>
</section>

<? snippet('foot') ?>
