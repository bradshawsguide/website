<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('places'),
    'title' => $page->title()
  ]);

  pattern('common/tablist', [
    'items' => $sectionTabs
  ]);

  pattern('common/switch');

  foreach(alphabetise($stations) as $letter => $items):
    pattern('common/index', [
      'items' => $items,
      'letter' => $letter
    ]);
  endforeach;
?>
</section>

<? snippet('foot') ?>
