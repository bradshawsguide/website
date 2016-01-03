<? foreach(alphabetise($search) as $letter => $items): ?>
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
        <li>
            <a href="<?= $item->url() ?>"<? if($item->text()->isEmpty()): ?> class="unremarkable"<? endif ?>><?= smartypants($title) ?></a>
        </li>
    <? endforeach ?>
    </ul>
<? endforeach ?>
