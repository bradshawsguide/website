<article class="c-result">
    <a class="c-result__body" href="<?= $item->url() ?>">
        <header class="c-result__header">
            <?= brick('h'.$level)->html($item->title())->addClass('c-result__title') ?>
        </header>

        <div class="c-result__main">
            <?php
                pattern('scopes/text', [
                    'content' => !$item->desc()->empty() ? $item->desc() : excerpt($item->text(), $length=240)
                ]);
            ?>
        </div>

        <footer class="c-result__footer">
            <p><?= str::ucfirst($item->intendedTemplate()) ?></p>
        </footer>
    </a>
</article>
