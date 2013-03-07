<?php
    if ($site->uri->params('section')) {
        $alphabetise = alphabetise($page->children()->filterBy('section', $site->uri->params('section'))->sortby('title'), array('key' => 'title'));
    } else {
        $alphabetise = alphabetise($page->children()->sortby('title'), array('key' => 'title'));
    }
    foreach($alphabetise as $letter => $items):
?>
    
        <h2 class="index"><?php echo str::upper($letter) ?></h2>
        <ul class="<?= $type ?> listing">
        <?php foreach($items as $item): ?>
    <li><a href="<?= $item->url() ?>"<? if ($item->text() == ''): ?> class="unremarkable"<? endif ?>><?= smartypants($item->title()) ?></a></li>
        <?php endforeach ?>
</ul>
<?php endforeach ?>
