<section class="<?= classList('c-section', $modifiers ?? null) ?>">
    <?php
        snippet('title', [
            'title' => $title,
            'level' => $level ?? 2,
            'class' => 'c-section__title'
        ]);

        snippet('list', [
            'items' => $items,
            'component' => $component ?? null,
            'modifiers' => [$display ?? null]
        ]);
    ?>
</section>
