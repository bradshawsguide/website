<?
if (param('section')) {
    $alphabetise = alphabetise($page->children()->filterBy('section', params('section'))->sortby('title'), array('key' => 'title'));
} else {
    $alphabetise = alphabetise($page->children()->sortby('title'), array('key' => 'title'));
}
?>

<? foreach($alphabetise as $letter => $items): ?>
    <h2 class="index" id="<?= $letter ?>"><?= str::upper($letter) ?></h2>
    <ul class="<?= $type ?> listing">
    <? foreach($items as $item): ?>
        <?
        if ($item->short_title()->isNotEmpty()) {
            $title = $item->short_title();
        } else {
            $title = $item->title();
        }
        ?>
        <li><a href="<?= $item->url() ?>"<? if($item->text()->isEmpty()): ?> class="unremarkable"<? endif ?>><?= smartypants($title) ?></a></li>
    <? endforeach ?>
    </ul>
<? endforeach ?>
