<section class="c-section c-section--routes">
  <h1 class="c-section__title"><?= $title ?></h1>
  <ul class="c-list">
  <? foreach($routes as $route): ?>
    <li class="c-list__item">
      <?= html::a($route->url(), smartypants($route->title())) ?>
    </li>
  <? endforeach ?>
  </ul>
</section>
