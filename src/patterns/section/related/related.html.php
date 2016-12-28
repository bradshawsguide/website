<section class="c-section c-section--related">
  <h1 class="c-section__title">Related Links</h1>
  <ul class="c-list">
  <? if ($p->related()->isNotEmpty()): ?>
    <? foreach($p->related()->split('-') as $related): ?>
      <li class="c-list__item">
        <?= kirbytext($related) ?>
      </li>
    <? endforeach ?>
  <? else: ?>
      <li class="c-list__item">
        <a href="https://en.wikipedia.org/w/index.php?search=<?= urlencode($page->title().' '.$type) ?>"><?= smartypants($page->title()) ?> on Wikipedia</a>
      </li>
  <? endif ?>
  </ul>
</section>
