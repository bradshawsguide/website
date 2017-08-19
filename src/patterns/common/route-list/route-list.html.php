<ul class="c-route-list">
<? foreach($routes as $route): ?>
  <li class="c-route-list__item">
    <h2 class="c-route-list__label"><?= html::a($route->url(), $route->description()) ?></h2>
    <p class="c-route-list__desc"><?= $route->title() ?></p>
  </li>
<? endforeach ?>
</ul>
