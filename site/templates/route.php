<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb', array(
    'parent' => $page->company()
  ));

  pattern('common/header');

  pattern('content/prose');

  pattern('sections/routemap');

  pattern('sections/related');

  pattern('common/shorturl');
?>
</article>

<? snippet('foot') ?>
