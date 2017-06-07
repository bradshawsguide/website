<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', ['p' => $page]);
?>
<div class="c-page__content">
<?
  if($results && $results->count()) {
    foreach($results as $result) {
      pattern('common/result');
    }

    pattern('common/pagination', [
      'pagination' => $results->pagination()
    ]);
  } else {
    echo "<p>No results for <strong>".esc($query)."</strong></p>";
  }
?>
</div>
</section>

<? snippet('foot') ?>
