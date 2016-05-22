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
    pattern('section/routes', [
      'routes' => $routes,
      'context' => 'station'
    ]);
  }

  pattern('section/related', ['p' => $page]);

  pattern('common/shorturl');

  pattern('common/traverse', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
