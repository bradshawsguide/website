<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/header', [
    'parent' => page('companies/'.$page->company()->uid()),
    'title' => $page->title(),
    'subtitle' => $page->description()
  ]);

  snippet('content');

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
