<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/header', [
    'title' => $page->title()
  ]);

  snippet('content');
?>
</article>

<? snippet('foot') ?>
