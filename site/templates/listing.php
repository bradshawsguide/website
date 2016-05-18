<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/header');

  pattern('common/list', array(
    'items' => $page->children()
  ));
?>
</section>

<? snippet('foot') ?>
