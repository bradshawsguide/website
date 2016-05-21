<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('section/index', array(
    'search' => $page->children()
  ));
?>
</section>

<? snippet('foot') ?>
