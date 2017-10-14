<dl class="c-station" id="<?= $station->uid() ?>>">
    <dt class="c-station__title"><?= html::a($station->url(), $station->title()) ?></dt>
    <?php if ($desc = $station->excerpt()): ?>
    <dd class="c-station__desc"><?= kirbytextRaw($station->excerpt()) ?></dd>
    <?php endif ?>
</dl>
