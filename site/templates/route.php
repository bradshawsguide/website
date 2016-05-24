<? snippet('head') ?>

<article class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('page/content', ['p' => $page]);

  if (!$page->stops()->empty()) {
    pattern('section/routemap', [
      'stops' => $page->stops()->yaml()
    ]);
  }

  if (!$page->related()->empty()) {
    pattern('section/related');
  }

  pattern('common/shorturl');
?>
</article>

<? snippet('foot') ?>
