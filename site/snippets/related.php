<section>
    <h1>Related</h1>
    <ul>
    <? foreach(related($page->related()) as $related): ?>
        <li>
            <a href="<?= $related->url() ?>"><?= smartypants($related->title()) ?></a>
        </li>
    <? endforeach ?>
    </ul>
</section>
