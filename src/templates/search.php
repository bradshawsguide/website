<? snippet('head') ?>

<section class="c-page">
  <?
    pattern('common/page/header', [
      'title' => $title
    ])
  ?>

  <div class="c-page__content">
  <? if(count($results)): ?>
    <ul class="c-list c-list--grid">
      <? foreach($results as $result): ?>
      <li class="c-list__item">
        <?
          pattern('common/card', [
            'item' => $result
          ])
        ?>
      </li>
      <? endforeach ?>
    </ul>
    <?
      pattern('common/pagination', [
        'pagination' => $results->pagination()
      ])
    ?>
  <? else: ?>
    <p>No results for <strong><?= $query ?></strong></p>
  <? endif ?>
  </div>
</section>

<? snippet('foot') ?>
