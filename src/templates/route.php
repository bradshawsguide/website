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

  pattern('common/page/content');

  pattern('common/section/links', [
    'title' => 'Further reading',
    'links' => $page->links()
  ]);
?>
</article>

<? snippet('foot') ?>
