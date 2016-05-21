<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb', array(
    'parent' => $page->company()
  ));

  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  pattern('section/routemap');

  pattern('section/related');

  pattern('common/shorturl');
?>
</article>

<? snippet('foot') ?>
