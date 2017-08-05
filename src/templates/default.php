<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/header', [
    'p' => $page
  ]);

  pattern('common/content', [
    'p' => $page
  ]);
?>
</article>

<? snippet('foot') ?>
