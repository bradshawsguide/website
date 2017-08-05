<nav class="c-navigation" role="navigation">
  <h1 class="c-navigation__title">Explore <?= $site->title() ?></h1>
  <ul class="c-navigation__list">
  <? foreach($pages->visible() as $page): ?>
    <li class="c-navigation__item">
      <a href="<?= $page->url() ?>"<? e($page->isOpen(), ' class="is-active"') ?>>
      <? if($page->uid() == 'about'): ?>
        About
      <? else: ?>
        <?= $page->title() ?>
      <? endif ?>
      </a>
    </li>
  <? endforeach ?>
  </ul>
</nav>
