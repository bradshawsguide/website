<? if(count($routes)): ?>
  <section class="c-section">
    <?= brick('h'.(isset($level) ? $level : 2))->html($title)->attr('class', 'c-section__title') ?>
    <?
      foreach ($routes as $route) {
        pattern('common/route-traversal', [
          'title' => html::a($route->url(), smartypants($route->title_short())),
          'route' => $route
        ]);
      }
    ?>
  </section>
<? endif ?>
