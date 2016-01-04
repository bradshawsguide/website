<? if($page->hasImages()): ?>
    <figure>
    <? foreach($page->images() as $image): ?>
        <img src="<?= $image->url() ?>" alt=""/>
        <? if ($image->caption()): ?>
        <figcaption>
            <?= smartypants($image->caption()) ?>
        </figcaption>
        <? endif ?>
    <? endforeach ?>
    </figure>
<? endif ?>
