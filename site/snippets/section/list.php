<section class="<?= classList("c-section", $modifiers ?? null) ?>">
    <h2 class="c-section__title"><?= $title ?></h2>
    <?= snippet("list", [
        "items" => $items,
        "component" => $component ?? null,
        "display" => $display ?? null,
    ]) ?>
</section>
