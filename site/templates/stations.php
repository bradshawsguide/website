<?php snippet("head"); ?>

<?php snippet("content", slots: true); ?>
    <?php foreach (collection("stations") as $letter => $items) {
        snippet("collection", [
            "id" => $letter,
            "items" => $items,
            "title" => Str::upper($letter),
            "display" => "index columns",
        ]);
    } ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
