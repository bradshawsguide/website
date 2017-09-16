<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => $page->parent(),
    'title' => $page->title()
  ]);

  if (count($page->featured())) {
    pattern('common/section/featured', [
      'title' => 'Featured stations',
      'items' => $page->featured()
    ]);
  };

  pattern('common/section/list', [
    'title' => $page->subdivision(),
    'items' => $page->children()
  ]);
?>
</section>

<? snippet('foot') ?>
