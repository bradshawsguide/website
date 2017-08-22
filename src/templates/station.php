<?
  $class = $page->hasImages() ? 'has-poster' : null;
  snippet('head', [
    'class' => $class
  ])
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

  pattern('common/section/routes', [
    'title' => 'Routes serving this station',
    'level' => 3,
    'items' => $page->routes()
  ]);

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
