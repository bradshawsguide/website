<article class="c-route" id="<?= $route->uid() ?>">
    <?php
        snippet('title', [
            'title' => Html::a($route->url(),
                [$route->lineTitle().'<b-icon name="next"></a>']
            ),
            'level' => $level ?? 3,
            'class' => 'c-route__title'
        ]);

        snippet('scope/text', [
            'content' => $route->title()
        ]);
    ?>
</article>
