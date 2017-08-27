<?
  $class = $page->hasImages() ? 'has-poster' : null;
  snippet('head', [
    'alternate' => $page->url().'.geojson',
    'class' => $class
  ]);
?>

<article class="c-page">
<?
  $mods = $page->hasImages() ? 'poster' : 'inverted';
  pattern('common/page/header', [
    'title' => $page->displayTitle(),
    'notes' => $page->notes(),
    'parent' => $page->parent(),
    'modifiers' => [$mods]
  ]);

  pattern('common/page/content');

  pattern('common/section/route-traversals', [
    'title' => 'Routes serving this station',
    'level' => 3,
    'routes' => $page->routes()
  ]);
?>
</article>

<? snippet('foot') ?>
