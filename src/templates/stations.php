<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('explore'),
    'title' => $page->title()
  ]);

  foreach(alphabetise($stations) as $letter => $items):
    pattern('common/index', [
      'items' => $items,
      'letter' => $letter
    ]);
  endforeach;
?>
</section>

<? snippet('foot') ?>
