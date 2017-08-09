<nav class="c-navigation" role="navigation">
  <h1 class="c-navigation__title">Explore <?= $site->title() ?></h1>
  <ul class="c-navigation__list">
  <? foreach($pages->visible() as $page): ?>
    <li class="c-navigation__item c-navigation__item--<?= str::lower($page->title_short()) ?>">
      <a href="<?= $page->url() ?>" aria-label="<?= $page->title() ?>"<? e($page->isOpen(), ' aria-current="page"') ?>>
      <?
        if ($page->uri() == 'search'):
          pattern('common/icon', [
            'glyph' => 'search'
          ]);
        endif;

        echo $page->title_short();
      ?>
      </a>
    </li>
  <? endforeach ?>
  </ul>
</nav>
