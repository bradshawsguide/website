<? foreach(alphabetise($search->sortby('title')) as $letter => $items): ?>
    <h2 id="<?= $letter ?>"><?= str::upper($letter) ?></h2>
    <ul>
    <? foreach($items as $item): ?>
        <?
        if ($item->short_title()->isNotEmpty()) {
            $title = $item->short_title();
        } else {
            $title = $item->title();
        }
        ?>
        <li<? if($item->text()->isEmpty()): ?> class="unremarkable"<? endif ?>>
            <a href="<?= $item->url() ?>"><?= smartypants($title) ?></a>
        </li>
    <? endforeach ?>
    </ul>
<? endforeach ?>
