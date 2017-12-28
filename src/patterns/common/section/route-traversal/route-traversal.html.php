<section class="<?= classList('c-section', $modifiers) ?>">
    <?= brick('h'.$level)->html($title)->addClass('c-section__title') ?>
    <?php
        foreach ($routes as $route) {
            pattern('common/route-traversal', [
                'title' => html::a($route->url(), smartypants($route->shortTitle())),
                'level' => $level + 1,
                'route' => $route
            ]);
        }
    ?>
</section>
