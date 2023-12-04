<?php snippet("head"); ?>

<?php snippet("content", slots: true); ?>
    <?php foreach (collection("companies") as $letter => $items): ?>
        <?php snippet("collection", [
            "id" => $letter,
            "items" => $items,
            "title" => Str::upper($letter),
            "display" => "index",
        ]); ?>
    <?php endforeach; ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>

