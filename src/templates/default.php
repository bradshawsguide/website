<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/page/header', [
    'title' => $page->title()
  ]);

  pattern('common/page/content', [
    'editable' => false
  ]);
?>
</article>

<? snippet('foot') ?>
