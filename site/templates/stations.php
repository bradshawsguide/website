<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/header');

  pattern('section/index', array(
    'search' => $stations = $page->children()
  ));
?>
</section>

<? snippet('foot') ?>
