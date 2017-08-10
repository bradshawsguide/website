<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('companies/'.$page->company()->uid()),
    'title' => $page->title(),
    'subtitle' => $page->description()
  ]);

  pattern('common/page/content');

  pattern('common/map', [
    'url' => $page->uri()
  ]);

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
