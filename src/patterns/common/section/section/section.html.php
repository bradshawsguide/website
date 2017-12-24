<section class="c-section">
    <h2 class="c-section__title">
        <a href="<?= $url ?>" aria-label="<?= $label ?>"><?= $title ?></a>
    </h2>
    <div class="c-section__main">
        <?php
            pattern('scopes/text', [
                'content' => $content
            ]);
        ?>
    </div>
    <div class="c-section__footer">
        <?= $continue ?>
    </div>
</section>
