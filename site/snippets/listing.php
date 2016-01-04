<? if($items && $items->count()): ?>
    <ul>
    <? foreach($items as $item): ?>
        <li>
            <a href="<?= $item->url() ?>"><?= smartypants($item->title()) ?></a>
        </li>
    <? endforeach ?>
    </ul>
<? endif ?>
