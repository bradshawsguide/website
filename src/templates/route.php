<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  pattern('section/routemap', [
    'stops' => $page->stops()->yaml()
  ]);

  if (!$page->related()->empty()) {
    pattern('section/related', ['p' => $page]);
  }

  pattern('common/shorturl', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
