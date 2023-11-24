<article class="c-result">
    <header class="c-result__header">
        <?php
            if ($item->intendedTemplate() == 'station') {
                $title = $item->title().' Railway Station';
            } else {
                $title = $item->title();
            }
            snippet('title', [
                'title' => Html::a($item->url(), $title),
                'level' => $level ?? 3,
                'class' => 'c-result__title'
            ]);
        ?>
    </header>

    <div class="c-result__main">
        <?php
            $text = Str::unhtml(kt($item->text()));
            snippet('scope/text', [
                'content' => $item->desc()->isNotEmpty() ? $item->desc() : Str::excerpt($text, $length=240)
            ]);
        ?>
    </div>

    <footer class="c-result__footer">
        <p><?= $item->uri() ?></p>
    </footer>
</article>
