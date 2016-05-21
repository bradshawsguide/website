<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  pattern('common/list', array(
    'items' => $page->children()
  ));
?>
</section>

<? snippet('foot') ?>
