<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', [
    'modifier' => 'narrow',
    'p' => $page
  ]);
?>
</article>

<? snippet('foot') ?>
