<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb', array(
    'parent' => $page->company()
  ));

  pattern('page/header');

  pattern('content/prose');

  pattern('section/routemap');

  pattern('section/related');

  pattern('common/shorturl');
?>
</article>

<? snippet('foot') ?>
