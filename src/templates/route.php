<? snippet('head') ?>

<article class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('/routes/'),
    'title' => $page->title(),
    'subtitle' => $page->railway()
  ]);

  pattern('common/page/content');

  pattern('common/traverse');
?>
</article>

<? snippet('foot') ?>
