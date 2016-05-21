<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb', [
    'parent' => $page->region()
  ]);

  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  if($page->route()->isNotEmpty()) {
    $routes = related($page->route());
    pattern('section/routes', array(
      'routes' => $routes,
      'context' => 'station'
    ));
  }

  pattern('section/related');

  pattern('common/shorturl');

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
