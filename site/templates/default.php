<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
