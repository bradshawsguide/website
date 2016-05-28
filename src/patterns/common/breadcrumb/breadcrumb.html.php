<nav class="c-breadcrumb" role="navigation" aria-labelledby="breadcrumb">
  <h1 class="c-breadcrumb__title u-hidden" id="breadcrumb">You are here:</h1>
  <ol class="c-breadcrumb__items">
    <li class="c-breadcrumb__item">
      <a class="c-breadcrumb__label" href="<?= $page->parent()->url(); ?>"><?= html($page->parent()->title()) ?></a>
    </li>
    <li class="c-breadcrumb__item u-hidden">
      <strong class="c-breadcrumb__label" aria-current="page" aria-label="This page"><?= html($page->title()) ?></strong>
    </li>
  </ol>
</nav>
