<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb', array(
    'parent' => $page->region()
  ));

  pattern('page/header');

  pattern('content/prose');

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
