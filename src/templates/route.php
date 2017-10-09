<?
  snippet('head', [
    'alternate' => $page->url().'.geojson'
  ]);
?>

<article class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('/routes/'),
    'title' => $page->title(),
    'subtitle' => $subtitle
  ]);

  pattern('common/section/map', [
    'title' => 'Route map',
    'url' => $page->uri().'.geojson/'
  ]);

  pattern('common/page/content');

  pattern('common/section/links', [
    'title' => 'Further reading',
    'links' => $page->links()
  ]);
?>
</article>

<? snippet('foot') ?>
