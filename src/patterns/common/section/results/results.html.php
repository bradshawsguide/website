<section class="c-section">
  <?= brick('h'.(isset($level) ? $level : 2))->html($title)->attr('class', 'c-section__title') ?>
  <?
    foreach($results as $result) {
      pattern('common/result', [
        'result' => $result
      ]);
    }
  ?>
</section>
