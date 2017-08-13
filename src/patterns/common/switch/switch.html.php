<nav class="c-switch">
<? $currentURL = $kirby->request()->url() ?>
<? foreach($items as $item): ?>
  <? $itemURL = url($item[0]) ?>
  <a class="c-switch__label" href="<?= $item[0] ?>"<? e($currentURL == $itemURL, ' aria-current="page"') ?>><?= $item[1] ?></a>
<? endforeach ?>
</nav>
