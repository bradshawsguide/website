<article class="c-route" id="<?= $route->uid() ?>">
    <h3>
        <a href="<?= $route->url() ?>">
            <?= $route->lineTitle() ?>
            <b-icon name="next">
        </a>
    </h3>

    <?= snippet("scope/text", [
        "content" => $route->title(),
    ]) ?>
</article>
