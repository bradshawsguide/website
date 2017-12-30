<article class="c-route" id="<?= $route->uid() ?>">
    <?php
        $title = html::a($route->url(), $route->lineTitle());
        echo brick('h'.$level)->html($title)->addClass('c-route__title');

        pattern('scopes/text', [
            'content' => $route->title()
        ]);
    ?>
</article>
