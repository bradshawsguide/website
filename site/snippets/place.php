<article class="c-place" id="<?= $place->uid() ?>">
    <?php
        $title = Html::a($place->url(), $place->title());
        $suffixText = $suffix ? ' ('.$suffix.')' : '';

        snippet('title', [
            'title' => $title.$suffixText,
            'level' => $level ?? 3,
            'class' => 'c-place__title'
        ]);

        if ($place->excerpt()) {
            snippet('scope/text', [
                'content' => $place->excerpt()
            ]);
        }
    ?>
</article>
