<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', [
    'p' => $page
  ]);

  pattern('page/content', [
    'p' => $page,
    'image' => 'u-pull-right'
  ]);
?>
</article>

<? snippet('foot') ?>
