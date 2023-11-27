<article class="c-feature">
    <header>
        <h3><?= Html::a($item->url(), $item->title()) ?></h3>
        <p><?= kti($item->parent()->title()) ?></p>
    </header>

    <?php if ($item->hasImages()) {
        echo Html::img($item->image()->thumb('feature')->url(), [
            'alt' => $item->image()->alt(),
            'loading' => 'lazy',
            'srcset' => $item->image()->srcset('feature')
        ]);
    } ?>

    <?php if ($item->excerpt()) {
        snippet('scope/text', [
            'content' => $item->excerpt()
        ]);
    } ?>
</article>
