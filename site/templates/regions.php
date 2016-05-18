<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/header');

  foreach($pages->findOpen()->children() as $country) {
    pattern('sections/country', array(
      'country' => $country
    ));
  }
?>
</section>

<? snippet('foot') ?>
