<?php
    $currentSection = param('section', 1);
    $currentURL = kirby()->request()->url();
    $viewTabs = [
        array(
            'href' => '/'.$page->uri().'/section:'.$currentSection.'?view=list',
            'label' => 'List view',
            'value' => 'list'
        ),
        array(
            'href' => '/'.$page->uri().'/section:'.$currentSection.'?view=map',
            'label' => 'Map view',
            'value' => 'map'
        )
    ];
?>

<nav class="c-tabs">
    <p class="c-tabs__list">
    <?php foreach ($viewTabs as $viewTab): ?>
        <?php $viewURL = url($viewTab['href']) ?>
        <a class="c-tabs__label" href="<?= $viewTab['href'] ?>"<?php e($currentURL == $viewURL, ' aria-current="page"') ?>>
            <?= $viewTab['label'] ?>
        </a>
    <?php endforeach ?>
    </p>
</nav>
