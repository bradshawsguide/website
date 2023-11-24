<article class="c-route" id="<?= $route->uid() ?>">
    <?php
        snippet('title', [
            'title' => Html::a($route->url(), $route->lineTitle()),
            'level' => $level ?? 3,
            'class' => 'c-route__title'
        ]);

        snippet('scope/text', [
            'content' => $route->title()
        ]);
    ?>
</article>
