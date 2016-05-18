<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/breadcrumb', array(
    'parent' => $page->region()
  ));

  pattern('common/header');

  pattern('content/prose');

  if($page->route()->isNotEmpty()) {
    $routes = related($page->route());
    pattern('sections/routes', array(
      'routes' => $routes,
      'context' => 'station'
    ));
  }

  pattern('sections/related');

  pattern('common/shorturl');

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
