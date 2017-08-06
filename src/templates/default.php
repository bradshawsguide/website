<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/page/header', [
    'title' => $page->title()
  ]);

  pattern('common/page/content');
?>
</article>

<? snippet('foot') ?>
