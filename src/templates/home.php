<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/masthead');

  pattern('common/related');

  pattern('common/related');

  pattern('page/content', [
    'p' => $page
  ]);
?>
</article>

<? snippet('foot') ?>
