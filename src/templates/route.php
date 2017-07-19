<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', [
    'p' => $page,
    'parent' => page('companies/'.$page->company()->uid()),
    'subtitle' => $page->description()
  ]);

  pattern('page/content', [
    'p' => $page,
    'stops' => $page->stops()->yaml()
  ]);

  pattern('common/traverse', [
    'p' => $page
  ]);
?>
</article>

<? snippet('foot') ?>
