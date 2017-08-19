<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('places'),
    'title' => $page->title()
  ]);

  foreach(alphabetise($page->children()->visible()) as $letter => $items):
    pattern('common/index', [
      'items' => $items,
      'letter' => $letter
    ]);
  endforeach;
?>
</section>

<? snippet('foot') ?>
