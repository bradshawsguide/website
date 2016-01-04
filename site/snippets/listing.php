<? if($items && $items->count()): ?>
    <ul>
    <? foreach($items->sortby('title') as $item): ?>
        <li><?= html::a($item->url(), smartypants($item->title())) ?></li>
    <? endforeach ?>
    </ul>
<? endif ?>
