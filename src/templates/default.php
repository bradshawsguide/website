<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', [
    'p' => $page,
    'images' => true
  ]);
?>
</article>

<? snippet('foot') ?>
