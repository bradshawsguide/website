<dl class="c-place" id="<?= $place->uid() ?>">
    <dt class="c-place__title"><?= html::a($place->url(), $place->title()); e($suffix, ' ('.$suffix.')') ?></dt>
    <?php if ($desc = $place->excerpt()): ?>
    <dd class="c-place__desc"><?= kirbytextRaw($place->excerpt()) ?></dd>
    <?php endif ?>
</dl>
