<nav class="c-navigation" role="navigation">
  <h1 class="c-navigation__title u-hidden">Explore <?= $site->title() ?></h1>
  <ul class="c-navigation__list">
  <? foreach($pages->visible() as $page): ?>
    <li class="c-navigation__item">
      <a href="<?= $page->url() ?>"<? e($page->isOpen(), ' class="is-active"') ?>><?= $page->title() ?></a>
    </li>
  <? endforeach ?>
  </ul>
</nav>
