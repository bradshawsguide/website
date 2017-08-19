<?
  $currentSection = param('section', 1);
  $currentView = param('view', 'list');
  $currentURL = $kirby->request()->url();

  foreach(page('sections')->children() as $section) {
    $sectionTabs[] = array(
      'href' => '/'.$page->uri().'/section:'.$section->dirname().'/view:'.$currentView,
      'label' => $section->title()
    );
  };

  $viewTabs = [
    array(
      'href' => '/'.$page->uri().'/section:'.$currentSection.'/view:list',
      'label' => 'List view',
      'value' => 'list'
    ),
    array(
      'href' => '/'.$page->uri().'/section:'.$currentSection.'/view:map',
      'label' => 'Map view',
      'value' => 'map'
    )
  ];
?>

<nav class="c-tabs">
  <p class="c-tabs__list">
  <? foreach($sectionTabs as $sectionTab): ?>
    <? $sectionURL = url($sectionTab['href']) ?>
    <a class="c-tabs__label" href="<?= $sectionTab['href'] ?>"<? e($currentURL == $sectionURL, ' aria-current="page"') ?>>
      <?= $sectionTab['label'] ?>
    </a>
  <? endforeach ?>
  </p>

  <p class="c-tabs__list">
  <? foreach($viewTabs as $viewTab): ?>
    <? $viewURL = url($viewTab['href']) ?>
    <a class="c-tabs__label" href="<?= $viewTab['href'] ?>"<? e($currentURL == $viewURL, ' aria-current="page"') ?>>
      <?= $viewTab['label'] ?>
    </a>
  <? endforeach ?>
  </p>
</nav>
