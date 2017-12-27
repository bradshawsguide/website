<article class="c-place" id="<?= $place->uid() ?>">
    <?=
        $title = html::a($place->url(), $place->title());
        $suffix = ($suffix != null) ? ' ('.$suffix.')' : null;
        brick('h'.$level)->html($title.$suffix)->addClass('c-place__title');
    ?>

    <?php
        if ($place->excerpt()) {
            pattern('scopes/text', [
                'content' => $place->excerpt()
            ]);
        }
    ?>
</article>
