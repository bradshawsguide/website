<ul class="c-route-list">
<? foreach($routes as $route): ?>
  <li class="c-route-list__item">
    <h2 class="c-route-list__label"><?= html::a($route->url(), $route->shortTitle()) ?></h2>
    <? if (!$route->line()->empty()): ?><p class="c-route-list__desc"><?= $route->line() ?></p><? endif ?>
  </li>
<? endforeach ?>
</ul>
