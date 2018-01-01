<div class="<?= classList('c-section', $modifiers) ?>">
    <?php
        pattern('common/header', [
            'level' => 2,
            'title' => 'Places',
            'subtitle' => 'With Maps, Plans of Towns And Pictorial Illustrations',
            'modifiers' => ['index']
        ]);

        pattern('common/section/list', [
            'level' => 3,
            'title' => 'Best Of The Guide',
            'items' => $page->featured(),
            'component' => 'common/feature',
            'display' => 'grid'
        ]);
    ?>
</div>
