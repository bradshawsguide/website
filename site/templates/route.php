<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb', [
    'parent' => $page->company()
  ]);

  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  pattern('section/routemap', [
    'route' => "- routes/".kirby()->request()->path()->last()
  ]);

  pattern('section/related');

  pattern('common/shorturl');
?>
</article>

<? snippet('foot') ?>
