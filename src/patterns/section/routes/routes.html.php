<? if($items): ?>
  <section class="c-section c-section--routes">
    <h1 class="c-section__title"><?= $title ?></h1>
    <ul class="c-list">
    <? foreach($items as $item): ?>
      <li class="c-list__item">
        <?
          pattern('common/route', [
            'route' => $item
          ])
        ?>
      </li>
    <? endforeach ?>
    </ul>
  </section>
<? endif ?>
