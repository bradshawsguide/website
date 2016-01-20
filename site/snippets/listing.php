<? if($items && $items->count()): ?>
    <ul class="c-list">
    <? foreach($items->sortby('title') as $item): ?>
        <li class="c-list__item"><?= html::a($item->url(), smartypants($item->title())) ?></li>
    <? endforeach ?>
    </ul>
<? endif ?>
