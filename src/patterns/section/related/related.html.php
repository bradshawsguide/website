<? if ($p->related()->isNotEmpty()): ?>
  <section class="c-section c-section--related">
    <h1 class="c-section__title">Related Links</h1>
    <ul class="c-list">
    <? foreach($p->related()->split('-') as $related): ?>
      <li class="c-list__item">
        <?= kirbytext($related) ?>
      </li>
    <? endforeach ?>
    </ul>
  </section>
<? endif ?>
