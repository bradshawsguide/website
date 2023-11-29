<?php
$title = Html::a($place->url(), $place->title());
$suffixText = $suffix ? " (" . $suffix . ")" : "";
?>
<article class="c-place" id="<?= $place->uid() ?>">
    <h3><?= $title . $suffixText ?></h3>

    <?php if ($place->excerpt()) {
        snippet("scope/text", [
            "content" => $place->excerpt(),
        ]);
    }; ?>
</article>
