<? foreach(alphabetise($search->sortby('title')) as $letter => $items): ?>
<section class="c-section c-section--alphabetise" id="<?= $letter ?>">
    <h1 class="c-section__title"><?= str::upper($letter) ?></h1>
    <ul class="c-list">
    <? foreach($items as $item): ?>
        <?
        if ($item->short_title()->isNotEmpty()) {
            $title = $item->short_title();
        } else {
            $title = $item->title();
        }
        ?>
        <li class="c-list__item<? if($item->text()->isEmpty()): ?> unremarkable<? endif ?>">
            <a href="<?= $item->url() ?>"><?= smartypants($title) ?></a>
        </li>
    <? endforeach ?>
    </ul>
</section>
<? endforeach ?>
