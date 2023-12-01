<article class="c-result">
    <header>
        <h3>
            <a href="<?= $item->url() ?>">
                <?= $item->intendedTemplate() == "station"
                    ? kti($item->title()) . " Railway Station"
                    : kti($item->title()) ?>
            </a>
        </h3>
    </header>

    <?php snippet("scope/text", [
        "content" => $item->desc()->isNotEmpty()
            ? $item->desc()
            : Str::excerpt(Str::unhtml(kt($item->text())), $length = 240),
    ]); ?>

    <footer>
        <p><?= $item->uri() ?></p>
    </footer>
</article>
