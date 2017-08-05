<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/header', [
    'p' => $page,
    'parent' => $page->parent()
  ]);

  // Get station UIDs listed under `featured:` frontmatter
  $featured = $page->featured()->yaml();

  // Convert $featured => array of pages
  array_walk($featured, function(&$value, $key) {
    $value = page('stations/'.$value);
  });

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
