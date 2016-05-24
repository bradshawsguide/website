<? if($items): ?>
  <section class="c-section c-section--routes">
    <h1 class="c-section__title"><?= $title ?></h1>
    <ul class="c-list">
    <? foreach($items as $item): ?>
      <li class="c-list__item">
        <?= html::a($item->url(), smartypants($item->title())) ?>
      </li>
    <? endforeach ?>
    </ul>
  </section>
<? endif ?>
