<header class="c-banner<? e($page->isHomePage(), ' c-banner--home') ?>">
  <h1 class="c-banner__title">
  <? if($page->isHomePage()): ?>
    <span class="c-banner__masthead">
      <span>Bradshaw’s Guide</span>
      <span>for tourists in</span>
      <span>Great Britain and&#160;Ireland</span>
    </span>
  <? else: ?>
    <a class="c-banner__homelink" href="<?= url() ?>" rel="home">
      Bradshaw’s <span class="u-hidden@small">Guide</span>
    </a>
  <? endif ?>
  </h1>
  <? if($page->isHomePage()): ?>
    <p class="c-banner__edition">1866 Edition</p>
  <? endif ?>
</header>
