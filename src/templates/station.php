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
    'title' => $page->title_full(),
    'notes' => $page->notes(),
    'parent' => $page->parent(),
    'subtitle' => $page->title_later(),
    'modifiers' => [$mods]
  ]);

  pattern('common/page/content');

  pattern('common/section/routes', [
    'title' => 'Routes serving the station',
    'items' => $page->routes()
  ]);

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
