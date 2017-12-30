<article class="c-place" id="<?= $place->uid() ?>">
    <?php
        $title = html::a($place->url(), $place->title());
        $suffix = isset($suffix) ? ' ('.$suffix.')' : '';
        echo brick('h'.$level)->html($title.$suffix)->addClass('c-place__title');

        if ($place->excerpt()) {
            pattern('scopes/text', [
                'content' => $place->excerpt()
            ]);
        }
    ?>
</article>
