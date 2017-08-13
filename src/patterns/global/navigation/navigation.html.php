<nav class="c-navigation">
  <h2 class="c-navigation__title">Explore <?= $site->title() ?></h2>
  <ul class="c-navigation__list">
  <? foreach($pages->visible() as $page): ?>
    <li class="c-navigation__item c-navigation__item--<?= str::lower($page->title_short()) ?>">
      <a href="<?= $page->url() ?>" aria-label="<?= $page->title() ?>"<? e($page->isOpen(), ' aria-current="page"') ?>>
      <?
        if ($page->uri() == 'search'):
          pattern('common/icon', [
            'glyph' => 'search'
          ]);
        else:
          echo $page->title_short();
        endif;
      ?>
      </a>
    </li>
  <? endforeach ?>
  </ul>
</nav>
