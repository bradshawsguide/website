<?php

$tabs = array_map(function ($letter) {
    return new class ($letter) {
        private $letter;
        public function __construct($letter)
        {
            $this->letter = $letter;
        }
        public function uid()
        {
            return $this->letter;
        }
        public function label()
        {
            return Str::upper($this->letter);
        }
        public function title()
        {
            return Str::upper($this->letter);
        }
    };
}, array_diff(range("a", "z"), ["x", "z"])); ?>

<?php snippet("head"); ?>

<?php snippet("content", slots: true); ?>
    <?php slot("beforeContent"); ?>
        <?php snippet("tablist", [
            "title" => "Indices",
            "tabs" => $tabs,
            "uid" => $page->letter(),
        ]); ?>
    <?php endslot(); ?>

    <?php slot(); ?>
        <?php snippet("collection", [
            "id" => $page->letter(),
            "items" => collection("stations")->filterBy(
                "slug",
                "^=",
                $page->letter()
            ),
            "title" => Str::upper($page->letter()),
            "display" => "index columns",
        ]); ?>
    <?php endslot(); ?>
<?php endsnippet(); ?>

<?php snippet("foot"); ?>
