<section>
    <h1>Related Links</h1>
    <ul>
        <? foreach($page->related()->split('-') as $related): ?>
        <li><?= kirbytext($related) ?></li>
        <? endforeach ?>
    </ul>
</section>
